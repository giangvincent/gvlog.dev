<?php

namespace App\Filament\Resources;


use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tinify;

class CompressImageService
{
    public static function compress(string $localPath, TemporaryUploadedFile $file): string
    {
        Tinify\setKey(config('services.tinify.key'));

        // 2) Paths & extensions

        $tmpDir = storage_path('app/tmp/tinify');
        if (! is_dir($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }

        $originalPath  = $file->getRealPath(); // Livewire temp file

        // 3) Compress with Tinify
        $source = Tinify\fromFile($originalPath);
        $converted = $source->convert(array("type" => ["image/webp"]));
        $extensionConverted = $converted->result()->extension();

        $optimizedPath = $tmpDir . '/' . Str::uuid() . '.' . $extensionConverted;
        $converted->toFile($optimizedPath);
        // $source->toFile($optimizedPath);

        // 4) Upload optimized file to R2
        $path     = $localPath . Str::uuid() . '.' . $extensionConverted;

        // Put as binary; use "public" so URLs work with ->visibility('public')
        Storage::disk('r2')->put(
            $path,
            file_get_contents($optimizedPath),
            ['visibility' => 'public']
        );

        // 5) Cleanup temp file
        @unlink($optimizedPath);

        // 6) Return the path stored in DB (e.g. "services/covers/xxxx.webp")
        return $path;
    }
}

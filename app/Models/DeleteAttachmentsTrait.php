<?php

use Illuminate\Support\Facades\Storage;

trait DeleteAttachmentsTrait
{

    public function deleteCoverImage($imagePath): void
    {
        if (! $imagePath) {
            return;
        }

        $path = ltrim($imagePath, '/');

        if (Storage::disk('r2')->exists($path)) {
            Storage::disk('r2')->delete($path);
        }
    }

    public function deleteAllAttachments($path, $content): void
    {
        if (! $content) {
            return;
        }

        $disk = Storage::disk('r2');

        // Extract all <img src="..."> URLs
        preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/', $content, $matches);

        $srcs = $matches[1] ?? [];

        if (empty($srcs)) {
            return;
        }

        $baseUrl = rtrim(config('filesystems.disks.r2.url') ?? '', '/');

        foreach ($srcs as $src) {
            $key = $this->extractR2Key($src, $baseUrl);

            if (! $key) {
                continue;
            }

            // Only delete our defined attachments path
            if (! str_starts_with($key, $path)) {
                continue;
            }

            if ($disk->exists($key)) {
                $disk->delete($key);
            }
        }
    }

    /**
     * Convert a full public URL -> R2 object key
     * Example:
     *   https://cdn.example.com/posts/attachments/abc.webp
     *   => posts/attachments/abc.webp
     */
    private function extractR2Key(string $src, string $baseUrl): ?string
    {
        // If src is a full CDN URL belonging to the R2 disk
        if ($baseUrl && str_starts_with($src, $baseUrl)) {
            return ltrim(substr($src, strlen($baseUrl)), '/');
        }

        // Fallback for relative URLs or direct R2 URLs
        return ltrim(parse_url($src, PHP_URL_PATH), '/');
    }
}
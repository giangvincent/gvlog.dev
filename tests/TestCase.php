<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        $this->ensureSqliteDatabaseExists();

        parent::setUp();
    }

    private function ensureSqliteDatabaseExists(): void
    {
        if (env('DB_CONNECTION') !== 'sqlite') {
            return;
        }

        $database = env('DB_DATABASE', 'database/testing.sqlite');
        $databasePath = $this->ensureAbsolutePath($database);

        if (! file_exists($databasePath)) {
            if (! is_dir(dirname($databasePath))) {
                mkdir(dirname($databasePath), recursive: true);
            }

            touch($databasePath);
        }
    }

    private function ensureAbsolutePath(string $path): string
    {
        if ($path === '') {
            return $path;
        }

        if ($path[0] === '/' || preg_match('/^[A-Za-z]:\\\\/', $path) === 1) {
            return $path;
        }

        $rootPath = dirname(__DIR__);

        return $rootPath . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
    }
}

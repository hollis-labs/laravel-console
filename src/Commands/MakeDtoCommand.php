<?php

namespace HollisLabs\LaravelConsole\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeDtoCommand extends GeneratorCommand
{
    protected $name = 'make:dto';
    protected $description = 'Create a new DTO class';
    protected $type = 'DTO';

    protected function getStub(): string
    {
        return file_exists($custom = base_path('stubs/laravel-console/action.stub'))
            ? $custom
            : __DIR__ . '/../../stubs/action.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\DTOs';
    }
}


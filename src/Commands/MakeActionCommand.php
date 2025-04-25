<?php

namespace HollisLabs\LaravelConsole\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    protected $name = 'make:action';

    protected $description = 'Create a new action class';

    protected $type = 'Action';

    protected function getStub(): string
    {
        return file_exists($custom = base_path('stubs/laravel-console/action.stub'))
            ? $custom
            : __DIR__.'/../../stubs/action.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Actions';
    }
}

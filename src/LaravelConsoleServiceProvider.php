<?php

namespace HollisLabs\LaravelConsole;

use HollisLabs\LaravelConsole\Commands\LaravelConsoleCommand;
use HollisLabs\LaravelConsole\Commands\MakeActionCommand;
use HollisLabs\LaravelConsole\Commands\MakeDtoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelConsoleServiceProvider extends PackageServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../stubs' => base_path('stubs/laravel-console'),
        ], 'laravel-console-stubs');
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-console')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_console_table')
            ->hasCommand(LaravelConsoleCommand::class);
    }

    public function register(): void
    {
        $this->commands([
            MakeActionCommand::class,
            MakeDtoCommand::class,
        ]);
    }
}

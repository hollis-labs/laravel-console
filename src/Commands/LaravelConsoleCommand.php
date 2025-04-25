<?php

namespace HollisLabs\LaravelConsole\Commands;

use Illuminate\Console\Command;

class LaravelConsoleCommand extends Command
{
    public $signature = 'laravel-console';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

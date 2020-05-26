<?php

namespace GeTracker\FlushIdeHelper;

use Illuminate\Console\Command;

class FlushIdeHelperCommand extends Command
{
    protected $signature = 'dev:flush-ide-helper';
    protected $description = 'Flushes barryvdh/laravel-ide-helper';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('clear-compiled');
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');

        system('php artisan ide-helper:models --nowrite', $returnValue);
    }
}

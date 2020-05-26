<?php

namespace GeTracker\FlushIdeHelper;

use Illuminate\Console\Command;

class FlushIdeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:flush-ide-helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flushes barryvdh/laravel-ide-helper';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('clear-compiled');
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');

        system('php artisan ide-helper:models --nowrite', $returnValue);
    }
}

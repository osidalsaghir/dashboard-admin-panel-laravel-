<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Handeler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'handle:fun';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Non';

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
        $this->info('hi there ');
    }
}

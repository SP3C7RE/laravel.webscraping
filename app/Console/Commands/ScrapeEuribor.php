<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeEuribor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:euribor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EuriborRates-rates.eu ! Rates scraper';


    protected $collections = [
        'period',
        'rates'
    ];

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
        //
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RefreshQuotes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:refresh-quotes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        try {
            info('Refreshing quotes');
            $count = 5;
            $quotes = [];
            for ($i = 0; $i < $count; $i++) {
                $response = Http::retry(5, 100)->get('https://api.kanye.rest');
                if ($response->successful()) {
                    $quotes[] = $response['quote'];
                } else {
                    $quotes[] = 'Could not fetch quote';
                }
            }
            info($quotes);
             return $quotes;


        } catch (\Exception $e) {
            return "Failed to fetch quotes";
        }
    }
}





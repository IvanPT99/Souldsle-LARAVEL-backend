<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Timer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'timer:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'change id whe the timer goes out';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = route('games.store');
        Http::post($url);
    }
}

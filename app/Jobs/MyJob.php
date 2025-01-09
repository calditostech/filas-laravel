<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class MyJob implements ShouldQueue
{
    use Queueable;

    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function handle()
    {
        // Log no método handle do Job
        Log::info('Esta mensagem de nome: ' . $this->message . ' foi processada');
    }
}

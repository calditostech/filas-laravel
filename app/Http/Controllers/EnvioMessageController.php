<?php

namespace App\Http\Controllers;

use App\Jobs\MyJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnvioMessageController extends Controller
{
    public function envioMessage($message)
    {
        Log::info('Mensagem recebida na controller: ' . $message);

        MyJob::dispatch($message);

        return 'Sua mensagem esta sendo processada';
    }
}

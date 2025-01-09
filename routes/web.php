<?php

use App\Http\Controllers\EnvioMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/envio-job/{message}', [EnvioMessageController::class, 'envioMessage'])->name('envio-message');
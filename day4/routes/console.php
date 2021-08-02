<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('hello', function(){
    $message = 'Hello World';

    $this->line($message);
    $this->info($message);
    $this->comment($message);
    $this->question($message);
    $this->error($message);
})->purpose('Menampilkan hello world');

Artisan::command('hello', function(){
    $name = $this->ask('Nama Anda?');

    $this->line('Nama Anda adalah: ' . $name);

    $password = $this->secret('Password?');

    $this->line('Password: ' . $password);
    
})->purpose('Menampilkan hello world');

Artisan::command('hello', function(){
    $confirm = $this->confirm('Lanjut?', true);

    var_dump($confirm);
    
})->purpose('Menampilkan hello world');

Artisan::command('coba', function(){
    $password = 'secret123';
    $this->info(env('MESSAGE'));
});

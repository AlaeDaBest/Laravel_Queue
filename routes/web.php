<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SlowJob;

Route::get('/', function () {
    // sleep(5);
    SlowJob::dispatch();
    return view('welcome');
});

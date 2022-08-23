<?php


use Illuminate\Support\Facades\Route;
use Lase\Prova\Controllers\InspirationController;

Route::get('inspire',[ InspirationController::class,'test']);

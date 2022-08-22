<?php


use Illuminate\Support\Facades\Route;
use lase\prova\Controllers\InspirationController;

Route::get('inspire',[ InspirationController::class,'test']);

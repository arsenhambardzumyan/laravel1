<?php
use Illuminate\Support\Facades\Route;
use App\Infrastructure\Controller\Api\RegisterController;

Route::post('/register', RegisterController::class);

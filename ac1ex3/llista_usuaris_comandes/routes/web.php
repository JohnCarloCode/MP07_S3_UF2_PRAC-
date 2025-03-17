<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariController;

Route::get('/usuaris', [UsuariController::class, 'index']);

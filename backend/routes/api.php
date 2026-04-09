<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);

?>
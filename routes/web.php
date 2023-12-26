<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

Route::get('/create-trip', [TripController::class, 'create']);
Route::post('/store-trip', [TripController::class, 'store']);

Route::get('/book-ticket', [TicketController::class, 'showAvailableSeats']);
Route::post('/purchase-ticket', [TicketController::class, 'purchase']);

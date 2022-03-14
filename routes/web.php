<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TicketController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/tickets', function () {
//     return Inertia::render('Tickets');
// })->middleware(['auth', 'verified'])->name('tickets');

Route::get('/requests', function () {
    return Inertia::render('Requests');
})->middleware(['auth', 'verified'])->name('requests');

Route::resource("patients", PatientController::class)->except([
    "edit",
    "create",
]);

Route::resource("tickets", TicketController::class)->except([
    "edit",
    "create",
]);
// Route::get('/patients', function () {
//     return Inertia::render('Patients');
// })->middleware(['auth', 'verified'])->name('patients');
// require __DIR__.'/auth.php';

Route::get('/profile', function () {
    return Inertia::render('PatientProfile');
})->middleware(['auth', 'verified'])->name('profile');
require __DIR__.'/auth.php';

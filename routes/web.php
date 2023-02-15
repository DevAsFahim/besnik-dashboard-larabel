<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('utmmanagement', function () {
    return Inertia::render('UTMManagement');
})->name('utmmanagement');

Route::get('customers', function () {
    return Inertia::render('customers');
})->name('customers');

Route::get('utmdetails', function () {
    return Inertia::render('UTMDetails');
})->name('utmdetails');

Route::get('list', function () {
    return Inertia::render('List');
})->name('list');

Route::get('eventReports', function () {
    return Inertia::render('EventReports');
})->name('eventReports');

Route::get('contacts', function () {
    return Inertia::render('Contacts');
})->name('contacts');

Route::get('uploadqueue', function () {
    return Inertia::render('UploadQueue');
})->name('uploadqueue')
;

Route::get('sequence', function () {
    return Inertia::render('Sequence');
})->name('sequence');

Route::get('emailvalidation', function () {
    return Inertia::render('EmailValidation');
})->name('emailvalidation');

Route::get('addsocialmedia', function () {
    return Inertia::render('AddSocialMedia');
})->name('addsocialmedia');

Route::get('publicpost', function () {
    return Inertia::render('PublicPost');
})->name('publicpost');

Route::get('schedulepost', function () {
    return Inertia::render('SchedulePost');
})->name('schedulepost');

Route::get('userinformation', function () {
    return Inertia::render('UserInformation');
})->name('userinformation');

Route::get('useraffiliatedashboard', function () {
    return Inertia::render('UserAffiliateDashboard');
})->name('useraffiliatedashboard');

Route::get('approvedorrejectprofile', function () {
    return Inertia::render('ApprovedOrRejectProfile');
})->name('approvedorrejectprofile');

Route::get('profileinformation', function () {
    return Inertia::render('ProfileInformation');
})->name('profileinformation');

Route::get('paymentrequest', function () {
    return Inertia::render('PaymentRequest');
})->name('paymentrequest');

Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');


require __DIR__.'/auth.php';

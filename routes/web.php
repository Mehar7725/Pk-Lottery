<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisiterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('visitor.home');
// });


// Home Controller
Route::controller(HomeController::class)->group(function () {
    Route::post('/contact-msg-forwerd', 'ContactMsgForwerd');
});



// Visiter Controller
Route::controller(VisiterController::class)->group(function () {
    Route::get('/', 'Home');
    Route::get('/winners', 'Winners');
    Route::get('/find-lottery', 'FindLottery');
    Route::get('/our-lottery', 'OurLottery');
    Route::get('/shipping-detail', 'ShippingDetails');
    Route::get('/contact-us', 'ContactUs');
});

// AdminController
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-dashboard', 'Dashboard');
    Route::get('/add-lottery', 'AddLottery');
    Route::get('/lottery-details', 'LotteryDetails');
    Route::get('/add-partner', 'AddPartner');
    Route::get('/partner-details', 'PartnerDetails');
    Route::get('/lottery-approvel', 'LotteryApprovel');
    Route::get('/lottery-approved-details', 'LotteryApprovedDetails');
    Route::get('/add-winner', 'AddWinner');
    Route::get('/winner-details', 'WinnerDetails');
    Route::get('/partner-re-details', 'PartnerReDetails');
    Route::get('/partner-re-commission', 'PartnerReCommission');
    Route::get('/commission-details-updates', 'CommissionDetailsUpdates');
    Route::get('/contact-msg', 'ContactMsges');
    Route::get('/contact-msg-delete/{id}', 'ContactMsgDelete');
});
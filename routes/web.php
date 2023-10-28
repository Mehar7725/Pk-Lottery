<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
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
    Route::get('/login', 'Login');
    Route::post('/login-partner', 'LoginPartner');
    Route::get('/logout', 'logout');
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


// Partner Controller
Route::controller(PartnerController::class)->group(function () {
  
    Route::get('/partner', 'Partner');
    Route::get('/buy-lottery', 'BuyLottery');
    Route::get('/update-profile', 'UpdateProfile');
    Route::post('/update-profile-action', 'UpdateProfileAction');
    Route::get('/update-password', 'UpdatePassword');
    Route::post('/update-password-action', 'UpdatePasswordAction');
    Route::get('/ship-lottery/{id}', 'ShipLottery');
    Route::post('/ship-lottery-confirm', 'ShipLotteryConfirm');
    Route::get('/total-members', 'TotalMembers');
    Route::get('/commission', 'Commission');
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
    // Partner Routes =====
    Route::post('/create-partner', 'CreatePartner');
    Route::get('/edit-partner/{id}', 'EditPartner');
    Route::post('/update-partner', 'UpdatePartner');
    Route::get('/delete-partner/{id}', 'DeletePartner');
    // Lottery Routes ======
    Route::post('/create-lottery', 'CreateLottery');
    Route::get('/edit-lottery/{id}', 'EditLottery');
    Route::post('/update-lottery', 'UpdateLottery');
    Route::get('/delete-lottery/{id}', 'DeleteLottery');
    // Winner Routes ======
    Route::post('/create-winner', 'CreateWinner');
    Route::get('/edit-winner/{id}', 'EditWinner');
    Route::post('/update-winner', 'UpdateWinner');
    Route::get('/delete-winner/{id}', 'DeleteWinner');
});
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
    Route::post('/visiter-login', 'VisiterLogin');
    Route::get('/logout', 'logout');
});



// Visiter Controller
Route::controller(VisiterController::class)->group(function () {
    Route::get('/', 'Home');
    Route::get('/winners', 'Winners');
   
    Route::get('/our-lottery', 'OurLottery');
    Route::get('/shipping-detail/{id}', 'ShippingDetails');
    Route::post('/shipping-confirm', 'ShippingConfirm');
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
    Route::get('/find-lottery', 'FindLottery');
    Route::post('/my-lottery', 'MyLottery');
});

// AdminController
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-dashboard', 'Dashboard');
    Route::get('/admin-profile', 'AdminProfile');
    Route::get('/add-lottery', 'AddLottery');
    Route::get('/lottery-details', 'LotteryDetails');
    Route::get('/add-partner', 'AddPartner');
    Route::get('/partner-details', 'PartnerDetails');
    Route::get('/partner-pending-lotteries', 'PartnerPendingLotteries');
    Route::get('/partner-approved-lotteries', 'PartnerApprovedLotteries');
    Route::get('/partner-claimed-lotteries', 'PartnerClaimedLotteries');
    Route::get('/partner-claim-pending-lotteries', 'PartnerClaimedPendingLotteries');
    Route::get('/partner-decline-lotteries', 'PartnerDeclineLotteries');
    Route::get('/partner-claim-decline-lotteries', 'PartnerClaimDeclineLotteries');
    Route::get('/visiter-pending-lotteries', 'VisiterPendingLotteries');
    Route::get('/visiter-approved-lotteries', 'VisiterApprovedLotteries');
    Route::get('/visiter-decline-lotteries', 'VisiterDeclineLotteries');
    Route::get('/add-winner', 'AddWinner');
    Route::get('/winner-details', 'WinnerDetails');
    Route::get('/create-add', 'CreateAdd');
    Route::get('/add-details', 'AddsDetails');
    Route::get('/add-account-detail', 'AddAccountDetail');
    Route::get('/account-details', 'AccountDetails');
    Route::get('/partner-re-details/{id}', 'PartnerReDetails');
    Route::get('/partner-re-commission/{id}', 'PartnerReCommission');
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
    // Company Details ======
    Route::get('/company-details', 'CompanyDetails');
    Route::post('/update-company-details', 'UpdateCompanyDetails');
    // Partner Lottery =====
    Route::get('/partner-lottery-approve/{id}', 'PartnerLotteryApprove');
    Route::get('/partner-lottery-decline/{id}', 'PartnerLotteryDecline');
    Route::get('/partner-lottery-delete/{id}', 'PartnerLotteryDelete');
    // Visiter Lottery =====
    Route::get('/visiter-lottery-approve/{id}', 'VisiterLotteryApprove');
    Route::get('/visiter-lottery-decline/{id}', 'VisiterLotteryDecline');
    Route::get('/visiter-lottery-delete/{id}', 'VisiterLotteryDelete');
    // Account Details =======
    Route::post('/create-account-detail', 'CreateAccountDetail');
    Route::get('/edit-account-detail/{id}', 'EditAccountDetail');
    Route::post('/update-account-detail', 'UpdateAccountDetail');
    Route::get('/delete-account-detail/{id}', 'DeleteAccountDetail');
    // Partner Commission ========
    Route::get('/commission-pending/{id}', 'CommissionPending');
    Route::get('/commission-approve/{id}', 'CommissionApprove');
    Route::get('/commission-decline/{id}', 'CommissionDecline');
    // Home Add =======
    Route::post('/upload-add', 'UploadAdd');
    Route::get('/add-delete/{id}', 'AddDelete');
    // Profile Update ======
    Route::post('/admin-profile-update', 'AdminProfileUpdate');
});
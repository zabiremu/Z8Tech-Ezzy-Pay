<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MsgController;
use App\Http\Controllers\Admin\RankController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Backend\LevelController;
use App\Http\Controllers\Backend\RejectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\PendingController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Admin\CommissionController;
use App\Http\Controllers\Backend\CompleteController;
use App\Http\Controllers\Admin\TrenscitionController;
use App\Http\Controllers\Backend\SendMoneyController;
use App\Http\Controllers\Admin\UserPasswordController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Backend\ProcessingController;
use App\Http\Controllers\Backend\AddFundReportController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\UsersCommissionController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/seed', function () {
    Artisan::call("migrate:fresh --seed");
    return "Database Clear and Seeding Success";
});
Route::get('/optimize', function () {
    Artisan::call("optimize:clear");
    return "Your website successfully optimized";
});
Route::get('/linkstorage', function () {
    Artisan::call("storage:link");
    return "success";
});

Route::view('/', 'auth.login');
Auth::routes();
Route::get('/registration/{username}', [UserController::class, 'registration'])->name('users.refer.registration');

Route::get('/admin/login', [AdminLoginController::class, 'adminLoginView'])->name('admin_login_view');
Route::post('/admin/login', [AdminLoginController::class, 'adminLoginCheck'])->name('admin_login_check');

Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->middleware(['admin'])
        ->name('admin.')
        ->group(function () {
            Route::resource('/dashboard', DashboardController::class);
            Route::resource('/profile', ProfileController::class);
            Route::resource('/userPassword', UserPasswordController::class);
            Route::resource('varified/users', UserController::class);
            Route::get('un-verified/users', [UserController::class, 'unverified_users'])->name('unverified_users');
            Route::resource('/msg', MsgController::class);
            Route::resource('/rank-list', RankController::class);
            Route::resource('/commision', CommissionController::class);
            Route::resource('/send', TrenscitionController::class);
            Route::resource('/report', ReportController::class);
            Route::get('/receiver', [ReportController::class, 'receiver'])->name('receiver');
            Route::get('/convert', [ReportController::class, 'convert'])->name('convert');
            Route::resource('/pending', PendingController::class);
            Route::resource('/processing', ProcessingController::class);
            Route::resource('/complete', CompleteController::class);
            Route::resource('/reject', RejectController::class);
            Route::resource('/add-fund-report', AddFundReportController::class);
            Route::resource('/setting', SettingController::class);
            Route::post('/update/setting', [SettingController::class, 'storeSettings'])->name('update.settings');
            Route::get('/update/setting/1', [SettingController::class, 'updateSetting'])->name('update.setting');
            Route::get('/level/{level}', [LevelController::class, 'store'])->name('level');
            Route::get('/admin-approved/{id}', [AddFundReportController::class, 'store'])->name('approved');
            Route::get('/admin-reject/{id}', [AddFundReportController::class, 'reject'])->name('reject');
            Route::post('/send-commissions', [CommissionController::class, 'store'])->name('send.commisons');
            Route::get('/payment/approved', [PaymentController::class, 'PaymentApproved'])->name('competed.index');
            Route::get('/withdraw-reject', [PaymentController::class, 'reject'])->name('withdraw.reject.list');
            
            Route::get('/withdraw/requests/', [PaymentController::class, 'PaymentProccessingwithDraw'])->name('send.pending.withdraw');
            Route::get('/withdraw/requests/{id}/edit', [PaymentController::class, 'withDrawRequestEdit'])->name('edit_withdraw');
            Route::put('/payment/approved/{id}', [PaymentController::class, 'PaymentApprovedwithDraw'])->name('withdraw.approved');
            
            Route::get('/withdraw-reject/{id}', [PaymentController::class, 'withDrawReject'])->name('withdraw.reject');
            Route::any('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
        });

    Route::prefix('/users')
        ->name('users.')
        ->group(function () {
            Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
            Route::get('/account/activate', [UserController::class, 'activate'])->name('account.activate');
            Route::get('/profile', [ProfileController::class, 'userProfile'])->name('profile');
            Route::get('/show/profile', [ProfileController::class, 'updateProfile'])->name('update.profile');
            Route::post('/update/profile', [ProfileController::class, 'updateInfo'])->name('update.information');
            Route::get('/app/users', [UserController::class, 'allUsers'])->name('list');

            Route::get('/booking-wallet/fund/transfer', [SendMoneyController::class, 'index'])->name('send');
            Route::get('/my-wallet/fund/transfer', [SendMoneyController::class, 'myWalletTransferView'])->name('my_wallet_fund_transfer');
            Route::post('/fund/transfer/store', [SendMoneyController::class, 'sendStore'])->name('send.money.freinds');
            Route::post('/get-ajax-user', [UserController::class, 'getAjaxUser'])->name('get.ajax');
            
            Route::post('/send-money', [SendMoneyController::class, 'store'])->name('send.store');

            Route::get('/deposit', [PaymentController::class, 'index'])->name('payment.index');
            Route::get('/deposit/history', [PaymentController::class, 'deposithistory'])->name('payment.deposithistory');
            Route::get('/send/history', [HistoryController::class, 'sendHistory'])->name('send_history');
            Route::get('/received/history', [HistoryController::class, 'receivedHistory'])->name('received_history');
            Route::get('/converted/history', [HistoryController::class, 'convertedHistory'])->name('converted_history');
            Route::get('/received/from-admin', [HistoryController::class, 'receiveFromAdmin'])->name('receiveFromAdmin');
            
            Route::get('/withdraw', [PaymentController::class, 'withDraw'])->name('payment.withdraw');
            Route::post('/withdraw/ammount', [PaymentController::class, 'withDrawAmmount'])->name('withDraw.ammount');
            Route::post('/deposit-store', [PaymentController::class, 'store'])->name('payment.store');
            Route::get('/team/members', [UserController::class, 'affilateIndex'])->name('affilate.index');
            Route::get('/team/members/{id}/{username}', [UserController::class, 'nestedMember'])->name('affilate.nested');
            Route::get('/ezzy-return', [PaymentController::class, 'ezzyreturn'])->name('convert.ezzy_return');
            Route::get('/ezzy-booking_wallet', [PaymentController::class, 'bookingWallet'])->name('convert.booking_wallet');
            Route::get('/level_bonus', [PaymentController::class, 'levelbonus'])->name('convert.level_bonus');
            Route::get('/affiliate_income', [PaymentController::class, 'affiliateIncome'])->name('convert.affiliate_income');
            Route::get('/ezzy_reward', [PaymentController::class, 'ezzyReward'])->name('convert.ezzy_reward');
            Route::get('/group_bonus', [PaymentController::class, 'groupBonus'])->name('convert.group_bonus');
            Route::get('/ezzy_royality', [PaymentController::class, 'ezzyRoyality'])->name('convert.ezzy_royality');


            Route::get('/settings',[UserSettingsController::class,"userSettings"])->name('settings');
            Route::post('/user-password',[UserSettingsController::class,"userChangePasswordStore"])->name('user_change_password');
            Route::put('/user-t-pin',[UserSettingsController::class,"userChangeTPinStore"])->name('user_change_tpin');

            Route::get('/commissions/affiliate',[UsersCommissionController::class,'affiliate'])->name('commissions.index');
            Route::get('/commissions/levelIncome',[UsersCommissionController::class,'levelIncome'])->name('commissions.levelIncome');
            Route::get('/commissions/ezzyReturn',[UsersCommissionController::class,'ezzyReturn'])->name('commissions.ezzyReturn');
            Route::get('/commissions/ezzyReward',[UsersCommissionController::class,'ezzyReward'])->name('commissions.ezzyReward');
            Route::get('/commissions/ezzy-royality',[UsersCommissionController::class,'ezzyRoyality'])->name('commissions.ezzy_royality');
            Route::get('/commissions/groupBonous',[UsersCommissionController::class,'groupBonous'])->name('commissions.groupBonous');
        });
});

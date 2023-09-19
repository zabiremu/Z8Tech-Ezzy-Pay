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
use App\Http\Controllers\Backend\ProcessingController;
use App\Http\Controllers\Backend\AddFundReportController;

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

Route::view('/', 'auth.login');

Auth::routes();


Route::get('/registration/{username}', [UserController::class, 'registration'])->name('users.refer.registration');
Route::middleware('auth')->group(function () {

    Route::prefix('admin/')
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
            Route::get('/take/withdraw', [PaymentController::class, 'PaymentProccessingwithDraw'])->name('send.pending.withdraw');
            Route::get('/payment/approved/{id}', [PaymentController::class, 'PaymentApprovedwithDraw'])->name('withdraw.approved');
            Route::get('/payment/approved', [PaymentController::class, 'PaymentApproved'])->name('competed.index');
            Route::get('/withdraw-reject/{id}', [PaymentController::class, 'withDrawReject'])->name('withdraw.reject');
            Route::get('/withdraw-reject', [PaymentController::class, 'reject'])->name('withdraw.reject.list');
        });

    Route::prefix('users/')
        ->name('users.')
        ->group(function () {
            Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
            Route::get('/account/activate', [UserController::class, 'activate'])->name('account.activate');
            Route::get('/profile', [ProfileController::class, 'userProfile'])->name('profile');
            Route::get('/show/profile', [ProfileController::class, 'updateProfile'])->name('update.profile');
            Route::post('/update/profile', [ProfileController::class, 'updateInfo'])->name('update.information');
            Route::get('/users', [UserController::class, 'allUsers'])->name('list');
            Route::any('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
            Route::get('/send', [SendMoneyController::class, 'index'])->name('send');
            Route::post('/send-money-freinds', [SendMoneyController::class, 'sendStore'])->name('send.money.freinds');
            Route::post('/get-ajax-user', [UserController::class, 'getAjaxUser'])->name('get.ajax');
            Route::post('/send-money', [SendMoneyController::class, 'store'])->name('send.store');
            Route::get('/nogod', [PaymentController::class, 'index'])->name('payment.index');
            Route::get('/withdraw', [PaymentController::class, 'withDraw'])->name('payment.withdraw');
            Route::post('/withdraw/ammount', [PaymentController::class, 'withDrawAmmount'])->name('withDraw.ammount');
            Route::post('/nogod-store', [PaymentController::class, 'store'])->name('payment.store');
            Route::get('/users', [UserController::class, 'affilateIndex'])->name('affilate.index');
            Route::get('/create', [UserController::class, 'create'])->name('affilate.create');
            Route::get('/ezzy-return', [PaymentController::class, 'ezzyreturn'])->name('convert.ezzy_return');
            Route::get('/level_bonus', [PaymentController::class, 'levelbonus'])->name('convert.level_bonus');
            Route::get('/affiliate_income', [PaymentController::class, 'affiliateIncome'])->name('convert.affiliate_income');
            Route::get('/ezzy_reward', [PaymentController::class, 'ezzyReward'])->name('convert.ezzy_reward');
            Route::get('/group_bonus', [PaymentController::class, 'groupBonus'])->name('convert.group_bonus');
            Route::get('/ezzy_royality', [PaymentController::class, 'ezzyRoyality'])->name('convert.ezzy_royality');
            // Route::post('/user-password',[UserPasswordController::class,"userPassword"])->name('password');
        });
});

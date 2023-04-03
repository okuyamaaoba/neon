<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrnerController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
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

Route::get('/users', [UserController::class, 'allUsers']);

Route::get('/top', [UserController::class, 'top'])->name('top');

//入力フォーム
Route::get('/contact_G', [UserController::class, 'contact_G'])->name('contact_G');
Route::get('contact_G/show_all', [UserController::class, 'showAll']);
Route::post('/contact_M', [UserController::class, 'contact_M'])->name('contact_M');
Route::post('/contact_sign', [UserController::class, 'contact_sign'])->name('contact_sign');
Route::get('/signUp', [UserController::class, 'signUp'])->name('signUp');

//確認画面
Route::post('/confirm_G', [UserController::class, 'confirm_G'])->name('confirm_G');
Route::post('/confirm_M', [UserController::class, 'confirm_M'])->name('confirm_M');
Route::post('/signConfirm', [UserController::class, 'signConfirm'])->name('signConfirm');

//完了画面・DB接続
Route::post('/complete_G', [UserController::class, 'send'])->name('send');
Route::post('/complete_M', [UserController::class, 'send_M'])->name('send_M');
Route::post('/signComplete', [UserController::class, 'sendSign'])->name('sendSign');

Route::get('/signIn', [UserController::class, 'signIn'])->name('signIn');


// 会員画面
Route::post('/membership', [UserController::class, 'membership'])->name('membership');
Route::post('/memberEdit', [UserController::class, 'memberEdit'])->name('memberEdit');
Route::post('/memberUpdate', [UserController::class, 'memberUpdate'])->name('memberUpdate');

//管理者画面
Route::get('orner/', [UserController::class, 'getIndex']);
Route::get('/orner', [UserController::class, 'orner'])->name('orner');
Route::post('orner/show', [UserController::class, 'show']);
Route::post('orner/reserve_serch', [UserController::class, 'reserve_serch']);
// Route::get('/ornerSignIn', [UserController::class, 'ornerSignIn'])->name('ornerSignIn');
// Route::post('orner/add', [UserController::class, 'add']);


// パスワードリセット関連
Route::get('/pwForget', [UserController::class, 'pwForget'])->name('pwForget');
Route::post('/pwReset', [UserController::class, 'pwReset'])->name('pwReset');
Route::post('/pwUpdate', [UserController::class, 'pwUpdate'])->name('pwUpdate');

//管理者管理画面
Route::get('/reserveList', [UserController::class, 'reserveList'])->name('reserveList');
Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');
Route::post('/reserveList', [UserController::class, 'reserveNG'])->name('reserveNG');

// Route::get('/test', [UserController::class, 'test'])->name('test');
Route::get('/ornerSignIn', [UserController::class, 'ornerSignIn'])->name('ornerSignIn');
Route::post('/getPoint', [UserController::class, 'getPoint'])->name('getPoint');

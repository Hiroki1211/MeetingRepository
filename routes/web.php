<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

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
    return view('welcome');
});

Route::get('/meeting/member', [UserController::class, 'member']);
Route::get('/meeting/member/tag', [UserController::class, 'tag']);

Route::get('/meeting/member/tag/make', function () {
    return view('/meeting/member-tag-make');
});

Route::post('/meeting/member/tag', [TagController::class, 'make']);
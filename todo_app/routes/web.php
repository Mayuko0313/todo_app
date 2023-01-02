<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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
    return view('home');
});

// Route::resource('tasks', TaskController::class);

Route::get('/',[TaskController::class,'index'])->name('index');//一覧表示

Route::post('/store',[TaskController::class,'store'])->name('store');//タスク追加

Route::get('/edit/{id}',[TaskController::class,'edit'])->name('edit');//タスク更新ページ表示
Route::post('/edit/{id}',[TaskController::class,'update'])->name('update');//タスク更新

Route::post('/delete/{id}',[TaskController::class,'delete'])->name('delete');//タスク削除

Route::post('/complete/{id}',[TaskController::class,'complete'])->name('complete');//タスク完了

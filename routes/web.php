<?php
use App\Http\Controllers\usercontroller;
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

Route::get('/', function () {
    return view('home',['mhs'=>[]]);
});
Route::get('/insert', function () {
    return view('insert');
});
Route::get('/test', [usercontroller::class,'hallo']);
// Route::get('/insert', [usercontroller::class,'']);
Route::post('/insert', [usercontroller::class,'insert']);



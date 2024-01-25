<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;



Route::get('/products', [ProductController::class, 'index']);

Route::post('/products', [ProductController::class, 'store']);


Route::post('/register', [AuthController::class, 'register']);
// Login
Route::post('/login', [AuthController::class, 'login']);

Route::get('/verify-otp', [AuthController::class, 'verifyOTP'])->name('verify.otp');
Route::middleware('auth:api')->get('/profile', [AuthController::class, 'getProfile']);


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/categories',function(Request $request){
//         return "Get all categories";
// })

// Route::post('/categories',function(Request $request){
//     return "return 1 category";
// })
// Route::patch('/categories/{catgoryID}',function(Request $request){
//     return "update 1 category";
// })

// Route::delete('/categories/{catgoryID}',function(Request $request){
//     return "delete 1 category";
// })
<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\QuotationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Enquiry Route
Route::post('enquiry',[EnquiryController::class,'store']);

// Quotation Route
Route::get('quotations',[QuotationController::class,'index']);

<?php

use App\Http\Controllers\BaseDataBookingController;
use Illuminate\Support\Facades\Route;


Route::post('BaseData/index', [BaseDataBookingController::class, 'index']);
Route::post('BaseData/getStateRequest', [BaseDataBookingController::class, 'getStateRequest']);
Route::post('BaseData/getDataAddService', [BaseDataBookingController::class, 'dataBasicAddServ']);
Route::post('BaseData/getDataAddTrip', [BaseDataBookingController::class, 'dataBasicAddTrip']);
Route::post('BaseData/getDataAddCompany', [BaseDataBookingController::class, 'dataBasicCompanies']);
Route::post('BaseData/getDataToManagCustrequest', [BaseDataBookingController::class, 'dataBasicCustomerRequest']);
Route::post('BaseData/getReportDataBasic', [BaseDataBookingController::class, 'ReportDataBaseic']);
Route::post('BaseData/getManageUser', [BaseDataBookingController::class, 'getDataPermission'])->name('index.index');

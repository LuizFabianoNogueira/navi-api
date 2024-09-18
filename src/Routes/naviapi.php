<?php

use Illuminate\Support\Facades\Route;
use LuizFabianoNogueira\NaviAPI\Http\Controllers\NaviAPIController;

Route::controller(NaviAPIController::class)->prefix('naviapi')->group(function () {
    Route::get('cep/{cep}', 'cep')->name('naviapi.cep');
    Route::get('cpf/{cpf}', 'cpf')->name('naviapi.cpf');
    Route::get('cnpj/{cnpj}', 'cnpj')->name('naviapi.cnpj');
});

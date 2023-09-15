<?php
use App\Http\Controllers\ReportagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ReportagesController::class, 'getHome']);

Route::get('/auteur', function () {
    return view('auteur', ['naam' => 'angela', 'uur' => strftime('%h')]);
});

Route::get('/klimaatcrisis', [ReportagesController::class, 'getKlimaatcrisis']);
Route::get('/co2uitstoot', [ReportagesController::class, 'getCo2uitstoot']);

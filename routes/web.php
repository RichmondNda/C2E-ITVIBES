<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {

    dump($_SERVER);

    return get_loaded_extensions();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    // Routes  Enregistrement d'étudiant
    Route::get('/vibes/student/create', 'App\Http\Controllers\EtudiantController@create')->name('create.student');
    Route::post('/vibes/students/store', 'App\Http\Controllers\EtudiantController@store')->name('store.student');

    Route::get('/vibes/student/liste', 'App\Http\Controllers\EtudiantController@index')->name('liste.student');

    Route::get('/vibes/student/get/ticket/{id}', 'App\Http\Controllers\EtudiantController@generatePDF')->name('get.ticket');
    Route::post('/vibes/students/soumission', 'App\Http\Controllers\EtudiantController@Soumission')->name('qrcode.Soumission');

    Route::get('Gestionnaire', 'App\Http\Controllers\ExcelController@index')->name('excel.view');
    Route::post('importExcel', 'App\Http\Controllers\ExcelController@importExcel')->name('importExcel');
});
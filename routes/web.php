<?php
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use App\Http\Controllers\kamarcontroller;
use App\Http\Controllers\pengunjungController;
use App\Http\Controllers\PublisherController;
use Database\Factories\pengunjungFactory;

Route::get('/home', function () {
    return view('home');
});
Route::get('/pengunjung', function () {
    return  view('pengunjung');
});
Route::get('/kamar', function () {
    return  view('kamar');
});



Route::group(['prefix' => '/pengunjung'], function(){
    Route::get('/all', [pengunjungController::class, 'index']);
    Route::get('/detail/{pengunjung}', [pengunjungController::class, 'show']);
    Route::delete('/delete/{pengunjung}', [pengunjungController::class, 'destroy']);
 });

Route::group(['prefix' => '/kamar'], function(){
    Route::get('/all', [kamarcontroller::class, 'index']);
});
// Route::get('/publisher', function () {});
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/detail_publisher/{publisher:nama}', [PublisherController::class, 'show']);   
Route::group(['prefix' => '/publisher'], function(){
    Route::get('/all', [PublisherController::class, 'index']);
    Route::get('/detail/{publisher:id}', [PublisherController::class, 'show']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegiEmpatController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('webKu/', function () {
    return "Apa kabar...........";
});


$logic = function () {
    return 'Hello Apa kabhar Badiyanto..........!';
};
Route::get('webKu1', $logic);

Route::get('satu/page', function () {
    return 'Yang ke Satu!';
});
Route::get('dua/page', function () {
    return 'Yang ke Dua!';
});
Route::get('tiga/page', function () {
    return 'Anda Hebat.......!';
});

Route::get('/buku/{judul}', function ($judul) {
    return "Buku <b>{$judul}</b> adalah termasuk buku komputer.";
});

Route::get('/coba', function () {
    return '<!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
<title>Coba laravel!</title>
</head>
<body>
<p>SELAMAT ANDA BELAJAR LARAVEL</p>
</body>
</html>';
});

Route::get('segi-empat/inputSegiEmpat', 'SegiEmpatController@inputSegiEmpat')
    ->name('segi-empat.inputSegiEmpat');

    Route::post('segi-empat/hasil','SegiEmpatController@hasil')
    ->name('segi-empat.hasil'); 

    Route::get('segi-empat/inputBalok',
    'SegiEmpatController@inputBalok')
    ->name('segi-empat.inputBalok');
   
   Route::post('segi-empat/hasilBalok',
    'SegiEmpatController@hasilBalok')
    ->name('segi-empat.hasilBalok'); 
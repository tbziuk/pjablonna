<?php
use Dbfx\LaravelStrapi\LaravelStrapi;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;

use App\Http\Controllers\intentions;
use App\Http\Controllers\announcement;
use App\Http\Controllers\news;
use App\Http\Controllers\wspolnotyParafialne;


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

Route::get('/ogloszenia-parafialne/{page?}', [announcement::class, 'show']);
Route::get('/intencje-mszalne/{page?}', [intentions::class, 'show']);
Route::get('/aktualnosci/{page?}', [news::class, 'show']);
Route::get('/aktualnosc/{id}', [news::class, 'showOne']);
Route::get('/strona-glowna', [news::class, 'index']);
Route::get('/', [news::class, 'index']);
Route::get('/wspolnoty', [wspolnotyParafialne::class, 'show']);

Route::get('/msze-i-nabozenstwa', function () { return view('msze'); });
Route::get('/kancelaria', function () { return view('kancelaria'); });

Route::get('/api/czytania', function () { return view('czytania'); });
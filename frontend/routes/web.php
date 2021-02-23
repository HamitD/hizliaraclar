<?php
use App\Http\Controllers;
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
    return view('Whois.index');
});

route::resource('Whois', 'WhoisController');
route::post('domainss', 'WhoisController@checkdomain')->name('Whois.checkdomain');
Auth::routes();

Route::get('/DashCoin', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/DashCoin', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('DashCoin/icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('DashCoin/maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('DashCoin/notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('DashCoin/rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('DashCoin/tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('DashCoin/typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('DashCoin/upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('DashCoin/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('DashCoin/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('DashCoin/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


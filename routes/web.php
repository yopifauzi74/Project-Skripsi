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
    return view('layouts.admin');
});
// Route::get('/', [
//     'as' => 'index', 'uses' => 'HomeController@index'
// ]);


// Route::get('register', [
//     'as' => 'register', 'uses' => 'SimpleauthController@register'
// ]);

// Route::post('/register', [
//     'as' => 'post-registration', 'uses' => 'SimpleauthController@doRegister'
// ]);

// Route::get('/registration/activate/{code}', [
//     'as' => 'activate', 'uses' => 'SimpleauthController@activate'
// ]);

// Route::post('/login', [
//     'as' => 'login', 'uses' => 'SimpleauthController@login'
// ]);

// Route::get('logout', [
//     'as' => 'logout', 'uses' => 'SimpleauthController@logout'
// ]);




Route::prefix('user')->group(function(){
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/add','UserController@create')->name('user.add');
    Route::post('/', 'UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/{id}', 'UserController@update')->name('user.update');
});

Route::prefix('role')->group(function(){
    Route::get('/', 'RoleController@index')->name('role.index');
    Route::get('/add','RoleController@create')->name('role.add');
    Route::post('/','RoleController@store')->name('role.store');
    Route::get('/edit/{id}','RoleController@edit')->name('role.edit');
    Route::post('/{id}','RoleController@update')->name('role.update');
});

Route::prefix('gejala')->group(function(){
    Route::get('/','GejalaController@index')->name('gejala.index');
    Route::get('/add','GejalaController@create')->name('gejala.add');
    Route::post('/','GejalaController@store')->name('gejala.store');
    Route::get('/edit/{id}','GejalaController@edit')->name('gejala.edit');
    Route::post('/{id}','GejalaController@update')->name('gejala.update');
    Route::get('/view/{id}','GejalaController@view')->name('gejala.view');
    Route::get('/delete/{id}','GejalaController@delete')->name('gejala.delete');
});

Route::prefix('gangguan_gizi')->group(function(){
    Route::get('/','GangguanGiziController@index')->name('diagnosa.index');
    Route::get('/add','GangguanGiziController@create')->name('diagnosa.add');
    Route::post('/','GangguanGiziController@store')->name('diagnosa.store');
    Route::get('/edit/{id}','GangguanGiziController@edit')->name('diagnosa.edit');
    Route::get('/view/{id}','GangguanGiziController@view')->name('diagnosa.view');
    Route::post('/{id}','GangguanGiziController@update')->name('diagnosa.update');
    Route::get('/delete/{id}','GangguanGiziController@delete')->name('diagnosa.delete');
});

Route::prefix('pasien')->group(function(){
    Route::get('/','PasienController@index')->name('pasien.index');
    Route::get('/add','PasienController@create')->name('pasien.add');
    Route::post('/', 'PasienController@store')->name('pasien.store');
    Route::get('/edit/{id}','PasienController@edit')->name('pasien.edit');
    Route::post('/{id}','PasienController@update')->name('pasien.update');
});

Route::prefix('rekap')->group(function(){
    Route::get('/','RekapDataController@index')->name('rekap.index');
    Route::get('/add','RekapDataController@create')->name('rekap.add');
    Route::post('/','RekapDataController@store')->name('rekap.store');
    Route::get('/detail/{id}','RekapDataController@detail')->name('rekap.detail');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login2', 'AuthController@postlogin')->name('login2');
Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::get('/dashboard','admin\AuthController@dashboard')->name('dashboard')->middleware('auth);

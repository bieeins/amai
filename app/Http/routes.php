<?php

Route::get('datatable', ['uses' => 'ProdiController@data']);
Route::get('datatable/getdata', [
    'as' => 'datatable.getdata',
    'uses' => 'ProdiController@getdata'
]);

Route::get('/', function () {
    return view('welcome');
});

#Route guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [
        'uses' => 'UserController@getLogin',
        'as' => 'login'
    ]);
    Route::post('/login', [
        'uses' => 'UserController@postLogin',
        'as' => 'login'
    ]);
});

Route::group(['middleware' => 'auth'], function () {
   #Route amai
//    Route::resource('amai', 'AmaiController');
    #Route standar
    Route::resource('standar', 'StandarController');
    #Route pertanyaan
    Route::resource('pertanyaan', 'PertanyaanController');
    #Route sub standar
    Route::resource('substandar', 'SubStandarController');
    #Route jurusan
    Route::resource('jurusan', 'JurusanController');
    #Route periode
    Route::resource('periode', 'PeriodeController');
    #Route fakultas
    Route::resource('fakultas', 'FakultasController');

    #Route perfix amai
    Route::group(['prefix' => 'amai'], function () {
        Route::get('/input', [
            'uses' => 'AmaiController@input',
            'as' => 'amai.input'
        ]);
        Route::get('/lihat/{id}', [
            'uses' => 'ProdiController@getLihat',
            'as' => 'prodi.lihat'
        ]);
        Route::get('/edit/{id}', [
            'uses' => 'ProdiController@getEdit',
            'as' => 'prodi.edit'
        ]);
        Route::put('/edit/{id}', [
            'uses' => 'ProdiController@putEdit',
            'as' => 'prodi.edit'
        ]);
        Route::get('/tambah', [
            'uses' => 'ProdiController@getTambah',
            'as' => 'prodi.tambah'
        ]);
        Route::post('/tambah', [
            'uses' => 'ProdiController@postTambah',
            'as' => 'prodi.tambah'
        ]);
        Route::Delete('/hapus/{id}', [
            'uses' => 'ProdiController@Hapus',
            'as' => 'prodi.hapus'
        ]);
    });

    #Route perfix prodi
    Route::group(['prefix' => 'prodi'], function () {
        Route::get('/', [
            'uses' => 'ProdiController@getIndex',
            'as' => 'prodi.index'
        ]);
        Route::get('/lihat/{id}', [
            'uses' => 'ProdiController@getLihat',
            'as' => 'prodi.lihat'
        ]);
        Route::get('/edit/{id}', [
            'uses' => 'ProdiController@getEdit',
            'as' => 'prodi.edit'
        ]);
        Route::put('/edit/{id}', [
            'uses' => 'ProdiController@putEdit',
            'as' => 'prodi.edit'
        ]);
        Route::get('/tambah', [
            'uses' => 'ProdiController@getTambah',
            'as' => 'prodi.tambah'
        ]);
        Route::post('/tambah', [
            'uses' => 'ProdiController@postTambah',
            'as' => 'prodi.tambah'
        ]);
        Route::Delete('/hapus/{id}', [
            'uses' => 'ProdiController@Hapus',
            'as' => 'prodi.hapus'
        ]);
    });
});

#Route perfix user
Route::group(['prefix' => 'users'], function () {
    Route::get('/', [
        'uses' => 'UserController@getIndex',
        'as' => 'user.index'
    ]);
    Route::get('/lihat/{id}', [
        'uses' => 'UserController@getLihat',
        'as' => 'user.lihat'
    ]);

    Route::get('/edit/{id}', [
        'uses' => 'UserController@getEdit',
        'as' => 'user.edit'
    ]);
    Route::put('/edit/{id}', [
        'uses' => 'UserController@putEdit',
        'as' => 'user.edit'
    ]);

    Route::get('/tambah', [
        'uses' => 'UserController@getTambah',
        'as' => 'user.tambah'
    ]);
    Route::post('/tambah', [
        'uses' => 'UserController@postTambah',
        'as' => 'user.tambah'
    ]);

    Route::Delete('/hapus/{id}', [
        'uses' => 'UserController@Hapus',
        'as' => 'user.hapus'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'
    ]);
});






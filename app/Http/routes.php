<?php

Route::get('/', function () {
    return view('welcome');
});

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

#Route perfix user
Route::group(['prefix' => 'users'], function () {
    Route::group(['middleware' => 'auth'], function () {
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
});

#Route perfix prodi
Route::group(['prefix' => 'prodi'], function () {
    Route::group(['middleware' => 'auth'], function () {
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



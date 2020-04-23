<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('ujian', 'UjianController');

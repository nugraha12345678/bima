<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return ('Selamat Datang');
});

Route::get('/about', function () {
    return ('NIM: 2241167004 <br>
    Nama: Bima Satria <br>
    Kelas: TSA WEB B');
});

Route ::get('/article/1', function () {
    return ('Ini artikel 1');
});

Route::get('/article/2', function () {
    return ('Ini artikel 2');
});

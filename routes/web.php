<?php
use Core\Route;

Route::get('/', 'HomeController@index');

Route::group('san-pham', function () {
    Route::get('/', 'ProductController@index');
    Route::get('{cat}/{slug}', 'ProductController@detail');
});
Route::group('tin-tuc', function () {
    Route::get('/', 'BlogController@index'); // /tin-tuc
    Route::get('{cat}/{id}', 'BlogController@detail');
});

Route::get('/gioi-thieu', 'PageController@gioiThieu');
Route::get('/lien-he', 'PageController@lienHe');
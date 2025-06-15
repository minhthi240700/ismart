<?php

use Core\Route;

Route::group('admin', function () {
    Route::get('/', 'Admin/DashboardController@index');

    Route::group('product', function () {
        Route::get('/', 'Admin/ProductController@listProducts');
        Route::get('cat-product', 'Admin/ProductController@catProduct');
        Route::get('add-product', 'Admin/ProductController@addProduct');
    });

    Route::group('blog', function () {
        Route::get('/', 'Admin/BlogController@listBlog');
        Route::get('cat-blog', 'Admin/BlogController@catBlog');
        Route::get('add-blog', 'Admin/BlogController@addBlog');
    });
});

<?php

Route::group(['middleware' => 'web', 'prefix' => 'news', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::get('/', 'NewsController@index');

    Route::resource('/news_category', 'NewsCategoryController', ['as' => 'news']);
    Route::resource('/news_post', 'NewsPostController', ['as' => 'news']);

    Route::get('/news_post/get','NewsPostController@get')->name('news.get');
});

/* API route */
Route::group(['prefix' => 'api', 'namespace' => 'Modules\News\Http\Controllers\Api'], function () {
    Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {
        Route::post('/news/categories', 'NewsController@listCategories')->name('api.v1.news.categories');
        Route::post('/news/list', 'NewsController@listPost')->name('api.v1.news.posts');
        Route::post('/news/detail', 'NewsController@detailNews')->name('api.v1.news.detail');
    });
});
<?php

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



Route::group([''], function (){
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'home']);
    Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);

    Route::auth();
});



//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    //admin
    Route::get('/', function (){

    });

    //admin/pages
    Route::group(['prefix' => 'pages'], function (){

        //admin/pages
        Route::get('/', ['uses' => 'PagesController@execute', 'as' => 'pages']);

        //admin/pages/add
         Route::match(['get', 'post'], '/add', ['uses' => 'PagesAddController@execute', 'as' => 'pagesAdd']);
        //admin/pages/edit/2
         Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'PagesEditController@execute', 'as' => 'pagesEdit']);
    });

    //admin/portfolio
    Route::group(['prefix' => 'portfolio'], function (){

        //admin/portfolio
        Route::get('/', ['uses' => 'PortfolioController@execute', 'as' => 'portfolio']);

        //admin/portfolio/add
        Route::match(['get', 'post'], '/add', ['uses' => 'PortfolioController@execute', 'as' => 'portfolioAdd']);
        //admin/portfolio/edit/2
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses' => 'PortfolioController@execute', 'as' => 'portfolioEdit']);
    });

    //admin/services
    Route::group(['prefix' => 'services'], function (){

        //admin/services
        Route::get('/', ['uses' => 'ServicesController@execute', 'as' => 'services']);

        //admin/services/add
        Route::match(['get', 'post'], '/add', ['uses' => 'ServicesController@execute', 'as' => 'servicesAdd']);
        //admin/services/edit/2
        Route::match(['get', 'post', 'delete'], '/edit/{services}', ['uses' => 'ServicesController@execute', 'as' => 'servicesEdit']);
    });
});

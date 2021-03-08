<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

Route::group(
    [
        'prefix' => (new LaravelLocalization)->setLocale(),
        'middleware' => [ ],
    ], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'Admin\MainController@index')->name('home');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('models', 'Admin\ModelController');
        Route::resource('type-models', 'Admin\TypeModelController');
//        Route::get('price/up/{id}', 'Admin\PriceController@up')->name('price_up');
//        Route::get('price/down/{id}', 'Admin\PriceController@down')->name('price_down');
//        Route::resource('price_service', 'Admin\PriceServiceController');
//        Route::get('price_service/up/{id}', 'Admin\PriceServiceController@up')->name('price_service_up');
//        Route::get('price_service/down/{id}', 'Admin\PriceServiceController@down')->name('price_service_down');
//        Route::resource('contacts', 'Admin\ContactController');
//        Route::resource('photo', 'Admin\PhotoController');
//        Route::resource('slider_images', 'Admin\SliderImageController');
//        Route::resource('portfolio', 'Admin\PortfolioController');
//        Route::resource('projects', 'Admin\ProjectController');
//        Route::resource('project_image', 'Admin\ProjectImageController');
//        Route::resource('form_requests', 'Admin\FormRequestsController');
//
//        Route::post('store-image', 'Admin\BaseController@storeImage')->name('store_image');
    });
});


Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//    Route::get('/', 'MainController@index')->name('admin.index');
//    Route::reso('/', 'MainController@index')->name('admin.index');
//});

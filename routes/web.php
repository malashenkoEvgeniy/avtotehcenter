<?php


use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();

// Route::get('/clear', function () {
//     Artisan::call('config:cache');
//     Artisan::call('cache:clear');
//     Artisan::call('view:clear');
//     Log::debug('CLEARED');
//     Artisan::call('route:clear');
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth'],
    ], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'Admin\HomeController@index')->name('home');
        Route::resource('certificate', 'Admin\CertificateController');
        Route::resource('main-page', 'Admin\MainPageController');
        Route::resource('slider', 'Admin\SliderImagesController');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('page', 'Admin\PageController');
        Route::resource('type-models', 'Admin\TypeModelController');
        Route::post('type-models/request-model-date', 'Admin\TypeModelController@requestModelDate')->name('request-model-date');
        Route::resource('product_images', 'Admin\ProductImageController');
        Route::resource('contacts', 'Admin\ContactController');
    });
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        Route::get('/', 'Frontend\HomeController@index');
        Route::get('/special_equipment/{slug}', 'Frontend\SpecialEquipmentController@show')->name('special_equipment');
        Route::get('/special_equipment_desc/{slug}', 'Frontend\SpecialEquipmentController@desckshow')->name('special_equipment_desc');
        Route::get('/product/{slug}', 'Frontend\ProductController@show')->name('product');
        Route::get('/special_equipment_filter', 'Frontend\SpecialEquipmentController@filter')->name('special_equipment_filter');
        Route::get('/page/{slug}', 'Frontend\PageController@show')->name('pages');
        Route::post('request-form-date', 'Frontend\SpecialEquipmentController@requestFormDate')->name('request-form-date');
        Route::get('/special_equipment_one/{slug}', 'Frontend\SpecialEquipmentController@view')->name('special_equipment_one');

        Route::post('/send-form', 'Frontend\BaseController@sendForm')->name('sendForm');

});


//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/home', 'HomeController@index')->name('home');

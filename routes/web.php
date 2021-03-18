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
        Route::get('/product/{id}', 'Frontend\ProductController@show')->name('product');
        Route::get('/special_equipment_filter', 'Frontend\SpecialEquipmentController@filter')->name('special_equipment_filter');
        Route::get('/page/{slug}', 'Frontend\PageController@show')->name('pages');
        Route::post('request-form-date', 'Frontend\SpecialEquipmentController@requestFormDate')->name('request-form-date');
        Route::get('/special_equipment_one/{slug}', 'Frontend\SpecialEquipmentController@view')->name('special_equipment_one');

//        Route::resource('categories', 'Admin\CategoryController');
//        Route::resource('models', 'Admin\ModelController');
//        Route::resource('type-models', 'Admin\TypeModelController');
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


//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/home', 'HomeController@index')->name('home');

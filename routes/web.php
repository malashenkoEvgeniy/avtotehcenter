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
        Route::resource('models', 'Admin\ModelController');
        Route::post('type-models/request-model-date', 'Admin\TypeModelController@requestModelDate')->name('request-model-date');
        Route::resource('product_images', 'Admin\ProductImageController');
        Route::resource('contacts', 'Admin\ContactController');
        Route::resource('form_requests', 'Admin\FormRequestsController');
        Route::post('store-image', 'Admin\BaseController@storeImage')->name('store_image');

    });
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        Route::get('/', 'Frontend\HomeController@index');
        Route::get('/special_equipment/{slug}', 'Frontend\SpecialEquipmentController@show')->name('special_equipment');
        Route::get('/special_equipment_m/{slugC}/{slugM}', 'Frontend\SpecialEquipmentController@showM')->name('special_equipment_m');
        Route::get('/special_equipment_desc/{slug}', 'Frontend\SpecialEquipmentController@desckshow')->name('special_equipment_desc');
    Route::get('/special_equipment_m_desc/{slugC}/{slugM}', 'Frontend\SpecialEquipmentController@descshowM')->name('special_equipment_m_desc');
        Route::get('/product/{slugP}/{slugC}/{slugM}/{slugT}', 'Frontend\ProductController@show')->name('product');
        Route::get('/special_equipment_filter', 'Frontend\SpecialEquipmentController@filter')->name('special_equipment_filter');
        Route::get('/page/{slug}', 'Frontend\PageController@show')->name('pages');
        Route::post('request-form-date', 'Frontend\SpecialEquipmentController@requestFormDate')->name('request-form-date');


        Route::post('/send-form', 'Frontend\BaseController@sendForm')->name('sendForm');

});


//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/home', 'HomeController@index')->name('home');

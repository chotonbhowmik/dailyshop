<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Fronted  Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')->name('homepage');
Route::group(['prefix' => 'products'], function(){
 Route::get('/', 'App\Http\Controllers\Frontend\PagesController@products')->name('allProducts');
 Route::get('/{slug}', 'App\Http\Controllers\Frontend\PagesController@productshow')->name('product.show');
 Route::get('/category', 'App\Http\Controllers\Frontend\PagesController@productcategory')->name('product.category');
 Route::get('/category/{slug}', 'App\Http\Controllers\Frontend\PagesController@categoryshow')->name('category.show');
 });

Route::group(['prefix' => 'cart'], function(){

 Route::get('/', 'App\Http\Controllers\Frontend\CartController@index')->name('cart.items');
 Route::post('store', 'App\Http\Controllers\Frontend\CartController@store')->name('cart.store');
 Route::post('/update/{id}', 'App\Http\Controllers\Frontend\CartController@update')->name('cart.update');
 Route::post('/destroy/{id}', 'App\Http\Controllers\Frontend\CartController@destroy')->name('cart.destroy');


});
Route::group(['prefix' => 'checkout'], function(){

 Route::get('/', 'App\Http\Controllers\Frontend\OrderController@index')->name('checkout.page');
 Route::post('store', 'App\Http\Controllers\Frontend\OrderController@store')->name('order.store');
 


});



/*
|--------------------------------------------------------------------------
|Backend  Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function(){

	Route::get('/dashboard', 'App\Http\Controllers\Backend\pagesController@index')->name('dashboard');

	// category route for crud
Route::group(['prefix' => 'category'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('category.create');

	Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store')->name('category.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@update')->name('category.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
});

	// Coupon route for crud
Route::group(['prefix' => 'coupon'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\CouponController@index')->name('coupon.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\CouponController@create')->name('coupon.create');

	Route::post('/store', 'App\Http\Controllers\Backend\CouponController@store')->name('coupon.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CouponController@edit')->name('coupon.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\CouponController@update')->name('coupon.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\CouponController@destroy')->name('coupon.destroy');
});

	// Size route for crud
Route::group(['prefix' => 'size'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\SizeController@index')->name('size.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\SizeController@create')->name('size.create');

	Route::post('/store', 'App\Http\Controllers\Backend\SizeController@store')->name('size.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\SizeController@edit')->name('size.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\SizeController@update')->name('size.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\SizeController@destroy')->name('size.destroy');
});

// color route for crud
Route::group(['prefix' => 'color'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\ColorController@index')->name('color.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\ColorController@create')->name('color.create');

	Route::post('/store', 'App\Http\Controllers\Backend\ColorController@store')->name('color.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ColorController@edit')->name('color.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\ColorController@update')->name('color.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\ColorController@destroy')->name('color.destroy');
});

// color route for crud
Route::group(['prefix' => 'product'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\ProductController@index')->name('product.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\ProductController@create')->name('product.create');

	Route::post('/store', 'App\Http\Controllers\Backend\ProductController@store')->name('product.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@edit')->name('product.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@update')->name('product.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\ProductController@destroy')->name('product.destroy');
});
// color route for crud
Route::group(['prefix' => 'brand'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\BrandController@create')->name('brand.create');

	Route::post('/store', 'App\Http\Controllers\Backend\BrandController@store')->name('brand.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\BrandController@update')->name('brand.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');
});

// Tax route for crud
Route::group(['prefix' => 'tax'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\TaxController@index')->name('tax.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\TaxController@create')->name('tax.create');

	Route::post('/store', 'App\Http\Controllers\Backend\TaxController@store')->name('tax.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\TaxController@edit')->name('tax.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\TaxController@update')->name('tax.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\TaxController@destroy')->name('tax.destroy');
});

// Customer route for crud
Route::group(['prefix' => 'customer'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\CustomerController@index')->name('customer.manage');

	
	Route::post('/store', 'App\Http\Controllers\Backend\CustomerController@store')->name('customer.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CustomerController@edit')->name('customer.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\CustomerController@update')->name('customer.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\CustomerController@destroy')->name('customer.destroy');
});

// Slider route for crud
Route::group(['prefix' => 'slider'], function(){
	Route::get('/manage', 'App\Http\Controllers\Backend\SliderController@index')->name('slider.manage');

	Route::get('/create', 'App\Http\Controllers\Backend\SliderController@create')->name('slider.create');

	Route::post('/store', 'App\Http\Controllers\Backend\SliderController@store')->name('slider.store');

	Route::get('/edit/{id}', 'App\Http\Controllers\Backend\SliderController@edit')->name('slider.edit');

	Route::post('/edit/{id}', 'App\Http\Controllers\Backend\SliderController@update')->name('slider.update');

	Route::post('/delete/{id}', 'App\Http\Controllers\Backend\SliderController@destroy')->name('slider.destroy');
});



});


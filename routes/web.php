<?php

/*
|--------------------------------------------------------------------------tro
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::prefix('/admin')->namespace('Admin')->group(function (){
	
	Route::get('/','AdminController@index')->name('admin');
	Route::get('/books','BooksController@index')->name('adminbooks');
	Route::get('/books/create','BooksController@create')->name('addbook');
	Route::post('/books','BooksController@store')->name('postadd');
	Route::get('/books/{id}/edit','BooksController@edit')->name('editbookdetails');
	Route::post('/books/{id}','BooksController@update')->name('posteditbookdetails');
	Route::get('/books/{id}/delete','BooksController@destroy')->name('deletebook');

	Route::get('/categories','CategoriesController@index')->name('admincategory');
	Route::get('/categories/create','CategoriesController@create')->name('addcategory');
	Route::post('/categories','CategoriesController@store')->name('postaddcategory');
	Route::get('/categories/{id}/edit','CategoriesController@edit')->name('editcategory');
	Route::post('/categories/{id}','CategoriesController@update')->name('posteditcategory');
	Route::get('/categories/{id}/delete','CategoriesController@destroy')->name('deleteCategory');

	Route::get('/orders','OrdersController@index')->name('adminorders');
	Route::get('/orders/{id}/edit','OrdersController@edit')->name('statuschange');
	Route::get('/orders/pending','OrdersController@pending')->name('pending');
	Route::get('/orders/deliverd','OrdersController@deliverd')->name('deliverd');
	
});

Route::namespace('Auth')->group(function(){
	
	Route::get('/register','SignupController@index')->name('register');
	Route::post('/register','SignupController@store')->name('postregister');
	Route::get('/login','LoginController@index')->name('login');
	Route::post('/login','LoginController@store')->name('postlogin');
	Route::get('/logout','LoginController@destroy')->name('logout');

	Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'ResetPasswordController@reset');

	Route::get('/redirect', 'LoginController@redirect');
	Route::get('/callback', 'LoginController@callback');

	Route::get('/redirect/facebook', 'LoginController@redirectFacebook');
	Route::get('/callback/facebook', 'LoginController@callbackFacebook');
	

});

Route::namespace('User')->group(function(){
	Route::get('/books/{id}','BooksController@show')->name('singleproduct');

	Route::get('/categories/{id}','CategoriesController@show')->name('books');

	Route::get('/profile','ProfileController@index')->name('profile');
	Route::post('/profile/update','ProfileController@update')->name('postchangepassword');
	Route::post('/profile/delete','ProfileController@destroy')->name('postdeleteprofile');
	

	Route::get('/cart','CartsController@index')->name('cart');
	Route::post('/carts','CartsController@store')->name('postaddcart');
	Route::post('update','CartsController@update')->name('update');
	Route::get('/cart/delete/{id}','CartsController@destroy')->name('deletecart');

	Route::get('/orders','OrdersController@index')->name('orders');
	Route::get('/orders/{id}','OrdersController@show')->name('orderdetails');

	Route::get('/checkout','CheckoutController@index')->name('checkout.index');
	Route::post('/checkout','CheckoutController@store')->name('checkout.store');

	Route::get('/confirmation','ConfirmationController@index')->name('confirmation.index');
	

});

Route::get('/','HomeController@index')->name('home');

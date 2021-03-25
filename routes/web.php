<?php

use App\Media;

Route::group(['prefix' => 'new-admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::get('foo', function () {

        return  Media::all();
    });

    Route::get('/', 'FrontendController@index')->name('home');
    Route::get('/loans-products', 'LoansProductController@index')->name('loans-products');
    Route::get('/loans-products/{slug}', 'LoansProductController@show')->name('loans-products.show');



    Route::get('/faq', 'FrontendController@faqs')->name('faqs');
    Route::get('/branches', 'FrontendController@branches')->name('branches');
    Route::get('/vacancies', 'FrontendController@vacancies')->name('vacancies'); 
    Route::get('/vacancies/{id}', 'FrontendController@showvacancies')->name('showvacancies'); 
    
    
    Route::get('/our-team', 'FrontendController@team')->name('team');
    Route::get('/zip','ZipController@download');
    Route::get('/pointers', 'FrontendController@pointer')->name('pointer');
    // Route::get('/Islamic-formula', 'FrontendController@islamic')->name('islamic');

    Route::post('/contact-us', 'FrontendController@contact')->name('contact-us.store');


    Route::get('blog/{category}', 'blogController@index')->name('blogpost');
    Route::get('blog/{category}/{slug}', 'blogController@show')->name('blogpost');


    Route::get('/nano-form',  'NanoFormController@index')->name('nanoForm.index');
    Route::post('/nano-form', 'NanoFormController@store')->name('nanoForm.store');


    Route::get('/exchange-form',  'ExchangeFormController@index')->name('ExchangeForm.index');
    Route::post('/exchange-form', 'ExchangeFormController@store')->name('ExchangeForm.store');


    Route::post('/exchange-form/upload/fileStore', 'ExchangeFormController@fileStore')->name('ExchangeForm.upload.fileStore');

    Route::get('/client-info',  'LoanApplyController@index')->name('client-info.index');
    Route::post('/client-info', 'LoanApplyController@store')->name('client-info.store');

    Route::post('/client-info-loan', 'LoanApplyController@addLoan')->name('client-info-loan.addLoan');
    Route::get('/client-info-loan', 'LoanApplyController@loanindex')->name('client-info-loan.loanindex');

    Route::post('/loan-login', 'LoanApplyController@login')->name('loan-login.login');
    Route::get('/loan-login', 'LoanApplyController@loginIndex')->name('loan-login.loginIndex');

    Route::get('/{name}', 'FrontendController@getpages')->name('getpages');

    Route::view('/email', 'loan/loanMail');
    
    
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//facebook scial

Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

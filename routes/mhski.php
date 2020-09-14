<?php

Route::group(['namespace' => 'Mhski'], function() {
    Route::get('/', 'HomeController@index')->name('mhski.dashboard');

    // SideBar
    Route::get('/statusajuan', 'HomeController@statusajuan')->name('mhski.statusajuan');
    Route::get('/formajuan', 'HomeController@formajuan')->name('mhski.formajuan');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('mhski.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('mhski.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('mhski.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('mhski.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('mhski.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('mhski.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('mhski.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('mhski.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('mhski.verification.verify');

});

// Start
Route::get('start', function(){
    return view('welcome');
})->name('start');

//Pre Login
Route::get('prelogin', function(){
    return view('prelogin');
})->name('prelogin');
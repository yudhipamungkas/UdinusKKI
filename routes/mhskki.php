<?php

Route::group(['namespace' => 'MhsKki'], function() {
    Route::get('/', 'HomeController@index')->name('mhskki.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('mhskki.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('mhskki.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('mhskki.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('mhskki.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('mhskki.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('mhskki.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('mhskki.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('mhskki.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('mhskki.verification.verify');
});
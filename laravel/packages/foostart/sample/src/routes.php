<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('sample', [
    'as' => 'sample',
    'uses' => 'Foostart\Sample\Controllers\Front\SampleFrontController@index'
]);

Route::get('faq', [
    'as' => 'faq',
    'uses' => 'Foostart\Sample\Controllers\Front\FaqFrontController@index'
]);

Route::get('slide', [
    'as' => 'slide',
    'uses' => 'Foostart\Sample\Controllers\Front\SlideFrontController@index'
]);

/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        /**
         * list
         */
        Route::get('admin/sample', [
            'as' => 'admin_sample',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/sample/edit', [
            'as' => 'admin_sample.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/sample/edit', [
            'as' => 'admin_sample.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/sample/delete', [
            'as' => 'admin_sample.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\SampleAdminController@delete'
        ]);
        
        
        
        
        
        
        
        Route::get('admin/faq', [
            'as' => 'admin_faq',
            'uses' => 'Foostart\Sample\Controllers\Admin\FaqAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/faq/edit', [
            'as' => 'admin_faq.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\FaqAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/faq/edit', [
            'as' => 'admin_faq.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\FaqAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/faq/delete', [
            'as' => 'admin_faq.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\FaqAdminController@delete'
        ]);
        
        
        
        Route::get('admin/slide', [
            'as' => 'admin_slide',
            'uses' => 'Foostart\Sample\Controllers\Admin\SlideAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/slide/edit', [
            'as' => 'admin_slide.edit',
            'uses' => 'Foostart\Sample\Controllers\Admin\SlideAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/slide/edit', [
            'as' => 'admin_slide.post',
            'uses' => 'Foostart\Sample\Controllers\Admin\SlideAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/slide/delete', [
            'as' => 'admin_slide.delete',
            'uses' => 'Foostart\Sample\Controllers\Admin\SlideAdminController@delete'
        ]);
        
    });
        
    });
    
    
    


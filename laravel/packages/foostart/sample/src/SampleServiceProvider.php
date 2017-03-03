<?php

namespace Foostart\Sample;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class SampleServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
        $this->publishes([
        ]);

        $this->loadViewsFrom(__DIR__ . '/views', 'sample');
         $this->loadViewsFrom(__DIR__ . '/views', 'faq');
         $this->loadViewsFrom(__DIR__ . '/views', 'slide');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'sample');
         $this->loadTranslationsFrom(__DIR__.'/lang', 'faq');
         $this->loadTranslationsFrom(__DIR__.'/lang', 'slide');


        /**
         * Load view composer
         */
        $this->sampleViewComposer($request);
        $this->faqViewComposer($request);
         $this->slideViewComposer($request);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foostart\Sample\Controllers\Admin\SampleAdminController');
         $this->app->make('Foostart\Sample\Controllers\Admin\FaqAdminController');
         $this->app->make('Foostart\Sample\Controllers\Admin\SlideAdminController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'sample');
        $this->loadViewsFrom(__DIR__ . '/views', 'faq');
        $this->loadViewsFrom(__DIR__ . '/views', 'slide');
    }

    /**
     *
     */
    public function sampleViewComposer(Request $request) {

        view()->composer('sample::sample*', function ($view) {
            global $request;
            $sample_id = $request->get('id');
            $is_action = empty($sample_id)?'add':'edit';

            $view->with('sidebar_items', [

                //list
                trans('sample::sample_admin.list') => [
                    'url' => URL::route('admin_sample'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('sample::sample_admin.'.$is_action) => [
                    'url' => URL::route('admin_sample.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }
    
    public function faqViewComposer(Request $request) {

        view()->composer('sample::faq*', function ($view) {
            global $request;
            $faq_id = $request->get('id');
            $is_action = empty($faq_id)?'add':'edit';

            $view->with('sidebar_items', [

                //list
                trans('sample::faq_admin.list') => [
                    'url' => URL::route('admin_faq'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('sample::faq_admin.'.$is_action) => [
                    'url' => URL::route('admin_faq.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }
    public function slideViewComposer(Request $request) {

        view()->composer('sample::slide*', function ($view) {
            global $request;
            $slide_id = $request->get('id');
            $is_action = empty($slide_id)?'add':'edit';

            $view->with('sidebar_items', [

                //list
                trans('sample::slide_admin.list') => [
                    'url' => URL::route('admin_slide'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('sample::slide_admin.'.$is_action) => [
                    'url' => URL::route('admin_slide.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }

}

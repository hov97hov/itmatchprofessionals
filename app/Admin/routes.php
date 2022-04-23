<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('jobs/list', SearchJobController::class);
    $router->resource('services/list', ServicesController::class);
    $router->resource('footer/list', FooterController::class);
    $router->resource('social/list', SocialController::class);
    $router->resource('banner/list', BannerController::class);
    $router->resource('contact/info/list', ContactInfoController::class);
    $router->resource('signUp/list', SignUpController::class);

});

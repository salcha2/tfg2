<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\Datos5Controller;
use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\EditorController;
use App\Admin\Controllers\Controller;


Admin::routes();





Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    //$router->resource('datos5s', Datos5Controller::class);
    $router->resource('demo/users', UserController::class);
    $router->resource('edificios', Datos4Controller::class);


});

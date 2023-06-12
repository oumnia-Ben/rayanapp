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
    $router->resource('users', UserController::class);
    $router->resource('banques', BanqueController::class);
    $router->resource('contributions', ContributionController::class);
    $router->resource('periods', PeriodController::class);
    $router->resource('credits', CreditController::class);
    $router->resource('payments', PaymentController::class);
    $router->resource('expenses', ExpenseController::class);
    $router->resource('banque-credits', BanqueCreditController::class);
    $router->resource('banque-payments', BanquePaymentController::class);
    $router->resource('notifications', NotificationController::class);
    $router->resource('announcements', AnnouncementController::class);
    $router->resource('announcement-users', AnnouncementUserController::class);
    $router->resource('reunions', ReunionController::class);
    $router->resource('expenses', ExpenseController::class);
    $router->resource('annonces', AnnonceController::class);
});

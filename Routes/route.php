<?php

use App\Base\Router;
use App\Controllers\BlogsController;
use App\Controllers\PortfoliosController;
use App\Controllers\SettingsController;
use App\Controllers\UsersController;
use App\Controllers\WelcomesController;
use App\Handler\CustomExceptionHandler;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;



Router::get('/', [WelcomesController::class, 'index']);
Router::get('blog', [WelcomesController::class, 'blogdata']);
Router::get('singleBlog/{id}', [WelcomesController::class, 'singleBlog']);
Router::get('portfolio_page', [WelcomesController::class, 'portfolio_page']);
Router::get('dashboard', [WelcomesController::class, 'dashboard']);

Router::get('portfolios', [PortfoliosController::class, 'index']);
Router::get('portfolio', [PortfoliosController::class, 'showform']);
Router::post('add_portfolio', [PortfoliosController::class, 'create']);

Router::get('login', [UsersController::class, 'login']);
Router::get('register', [UsersController::class, 'register']);
Router::post('create', [UsersController::class, 'create']);
Router::post('userLogin', [UsersController::class, 'userLogin']);
Router::get('profileUpdate/{id}', [UsersController::class, 'profileUpdate']);
Router::post('profileUpdate', [UsersController::class, 'setProfileUpdate']);
Router::get('logout', [UsersController::class, 'logout']);

Router::get('addblog', [BlogsController::class, 'index']);
Router::get('myblog', [BlogsController::class, 'show']);
Router::post('add_blog', [BlogsController::class, 'create']);
Router::get('blog_edit/{id}', [BlogsController::class, 'edit']);
Router::post('blog_update', [BlogsController::class, 'update_blog']);
Router::get('blog_delete/{id}', [BlogsController::class, 'blog_delete']);


Router::get('setting', [SettingsController::class, 'index']);
Router::post('updateSetting', [SettingsController::class, 'updateSetting']);

Router::group(['exceptionHandler' => CustomExceptionHandler::class], function () {

    // Your routes go here

});
Router::error(function (Request $request, \Exception $exception) {
    if ($exception instanceof NotFoundHttpException) {
        response()->redirect('404');
    }
});

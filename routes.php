<?php

use MVC_DA1\Controllers\Admin\CartController;
use MVC_DA1\Controllers\Admin\UserController;
use MVC_DA1\Controllers\Admin\CategoryController;
use MVC_DA1\Controllers\Admin\CommentController;
use MVC_DA1\Controllers\Admin\DashboardController;
use MVC_DA1\Controllers\Admin\ProductController;
use MVC_DA1\Controllers\Client\HomeController;
use MVC_DA1\Router;


$router = new Router();


// rang chủ website
$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/Notification', HomeController::class, 'notification');
$router->addRoute('/Contact', HomeController::class, 'contact');
$router->addRoute('/Categories', HomeController::class, 'categories');
$router->addRoute('/ProductDetail', HomeController::class, 'productDetail');
$router->addRoute('/Register', HomeController::class, 'register');
$router->addRoute('/Login', HomeController::class, 'login');  


// Trang chủ admin
$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

// Người dùng
$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

// Danh mục
$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

// Sản phẩm
$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');

//Bình luận 
$router->addRoute('/admin/comments', CommentController::class, 'index');
$router->addRoute('/admin/comments/delete', CommentController::class, 'delete');
$router->addRoute('/admin/comments/update', CommentController::class, 'update');
$router->addRoute('/admin/comments/create', CommentController::class, 'create');

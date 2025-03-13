<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

// 
route::resource('/orders', OrderController::class);
route::resource('/products', ProductController::class);


<?php

use App\Solid\AreaCalculator;
use App\Solid\Circle;
use App\Solid\Rectangale;
use App\Solid\Triangle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    return (new AreaCalculator)->totalArea(
        new Rectangale(10, 20),
        new Rectangale(20, 20),
        new Circle(10),
        new Triangle(20, 30),
    );
});
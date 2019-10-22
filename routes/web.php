<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//class Fish
//{
//    function eat()
//    {
//        return 'eat';
//
//    }
//
//    function swim()
//    {
//        return 'swim';
//
//    }
//}
//
//class Bike
//{
//    function start()
//    {
//        return 'start';
//
//    }
//
//    function run()
//    {
//        return 'run';
//
//    }
//}
//
//class Facade
//{
//    public static function __callStatic($name, $arguments)
//    {
//        return app()->make(static::getFacadeAccessor())->$name();
//    }
//
//    protected static function getFacadeAccessor()
//    {
//
//
//    }
//}
//
//
//
//class BikeFacade extends Facade
//{
//    protected static function getFacadeAccessor()
//    {
//        return 'bike';
//
//    }
//
//
//}
//
//class FishFacade extends Facade
//{
//    protected static function getFacadeAccessor()
//    {
//        return 'fish';
//
//    }
//}
//app()->bind('bike', function () {
//    return new Bike();
//});
//
//app()->bind('fish', function () {
//    return new Fish();
//});
//
//
//
//
//$var = FishFacade::swim();
//dd($var);

Route::get('/', function (Request $request) {
    return view('welcome');
});



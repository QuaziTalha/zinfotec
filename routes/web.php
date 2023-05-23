<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/',['as' => 'Home', function () {return view('Index');}]);
$router->get('/about', ['as'=>'About',function () {return view('About');}]);
$router->get('/product', ['as'=>'Product',function () {return view('Product');}]);
$router->get('/outdoor_fixed', ['as'=>'Outdoor_Fixed',function () {return view('Outdoor_Fixed');}]);
$router->get('/indoor_fixed', ['as'=>'Indoor_Fixed',function () {return view('Indoor_Fixed');}]);
$router->get('/led_mobile', ['as'=>'LED_Mobile',function () {return view('LED_Mobile');}]);
$router->get('/single_color', ['as'=>'Single_Color',function () {return view('Single_Color');}]);
$router->get('/pvc_panel', ['as'=>'PVC_Panel',function () {return view('PVC_Panel');}]);
$router->get('/led_glow', ['as'=>'LED_Glow',function () {return view('LED_Glow');}]);
$router->get('/contact', ['as'=>'Contact',function () {return view('Contact');}]);
/* $router->get('/advertisement_led_screens', ['as'=>'Advertisement_LED_Screens',function () {return view('Advertisement_LED_Screens');}]);
$router->get('/rental_led_screen_indoor', ['as'=>'Rental_LED_Screen_Indoor',function () {return view('Rental_LED_Screen_Indoor');}]); */
$router->get('/products_list', ['as'=>'Products_List',function () {return view('Products_List');}]);

$router->get('ContactMail', 'AjaxController@ContactMail');

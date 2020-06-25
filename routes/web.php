<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

$router->group(['prefix' => 'api/v1', 'gard' => 'api','middleware' => 'client'], function () use (&$router) {
    $router->get('/client_test',function (){
       return Auth::guard('api')->user();
    });
});
$router->post('/register','UserAuthController@register');


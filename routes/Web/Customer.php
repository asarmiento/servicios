<?php

/**
 * Created by PhpStorm.
 * User: Amwar
 * Date: 08/11/2016
 * Time: 04:17 PM
 */
Route::get('/clientes', ['as'=>'customer-index','uses'=>'CustomerController@index']);
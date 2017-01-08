<?php
/**
 * Created by PhpStorm.
 * User: Amwar
 * Date: 11/11/2016
 * Time: 10:37 AM
 */

namespace App\Http\Controllers;


class CustomerController extends Controller
{

    public function index(){
        $customers = [];
        return view('Customer.index',compact('customers'));
    }
}
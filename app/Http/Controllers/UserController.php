<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Auth;


class UserController extends Controller
{
    /**
     * login processs
     */
    public  function  index(){

        return view('welcome');
    }

}

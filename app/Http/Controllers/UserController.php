<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bosh_sahifa(){
        return view('user.bosh_sahifa.bosh_sahifa');
    }
}

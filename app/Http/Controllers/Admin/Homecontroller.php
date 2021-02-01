<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //funzione ritorno in admin home
    public function index() {
        return view('admin.home');
    }
}

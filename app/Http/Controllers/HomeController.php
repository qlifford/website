<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function index()
    {
        $data = User::get();
        

        return view('home.index', compact('data'));
    }
  
}

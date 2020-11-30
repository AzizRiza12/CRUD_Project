<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function layout()
    {
        return view ('pages/dashboard');
    }

    public function users()
    {
        return view ('pages/users');
    }

    public function kelas()
    {
        return view ('pages/kelas/index');
    }

}

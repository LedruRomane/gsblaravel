<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function france()
    {
        return view('client.france');
    }

    public function international()
    {
        return view('client.international');
    }
}

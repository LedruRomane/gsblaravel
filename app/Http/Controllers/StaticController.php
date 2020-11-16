<?php

namespace App\Http\Controllers;

use App\Models\Medicament;

class StaticController extends Controller
{
    public function index()
    {
        return view('client.index', [
            'medicaments' => Medicament::all()->random(3),
            'user' => auth()->user()
        ]);
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

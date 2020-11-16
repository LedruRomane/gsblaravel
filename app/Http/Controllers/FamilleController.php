<?php

namespace App\Http\Controllers;

use App\Models\Famille;

class FamilleController extends Controller
{
    public function index()
    {
        return view('client.familles', [
            'familles' => Famille::all()
        ]);
    }

    public function medicaments(Famille $famille)
    {
        $famille->load('medicaments');

        return view('client.medicaments', [
            'famille' => $famille,
        ]);
    }
}

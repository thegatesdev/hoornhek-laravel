<?php

namespace App\Http\Controllers;

use App\Models\Prisoner;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    public function index()
    {
        $prisoners = Prisoner::paginate(10);

        return view("prisoner.index", ['prisoners' => $prisoners]);
    }

    public function show(string $id)
    {
        $prisoner = Prisoner::find($id);
        return view("prisoner.show", ['prisoner' => $prisoner]);
    }
}

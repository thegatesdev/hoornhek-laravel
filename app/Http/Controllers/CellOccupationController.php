<?php

namespace App\Http\Controllers;

use App\Models\CellOccupation;

class CellOccupationController extends Controller
{
    public function index()
    {
        $occupations = CellOccupation::paginate(10);

        return view("occupation.index", ['occupations' => $occupations]);
    }

    public function show(string $id)
    {
        $occupation = CellOccupation::find($id);
        return view("occupation.show", ['occupation' => $occupation]);
    }
}

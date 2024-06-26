<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;

class CaseController extends Controller
{
    public function index()
    {
        $cases = CaseModel::paginate(10);

        return view("case.index", ['cases' => $cases]);
    }

    public function show(string $id)
    {
        $case = CaseModel::find($id);
        return view("case.show", ['case' => $case]);
    }
}

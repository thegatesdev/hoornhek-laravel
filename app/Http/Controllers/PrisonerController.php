<?php

namespace App\Http\Controllers;

use App\Models\Prisoner;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    public function index(Request $request) {
        $prisoners = Prisoner::paginate(10);

        return view("prisoner.index", ['prisoners' => $prisoners]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(10);

        return view("location.index", ['locations' => $locations]);
    }

    public function show(string $id)
    {
        $location = Location::find($id);
        return view("location.show", ['location' => $location]);
    }
}

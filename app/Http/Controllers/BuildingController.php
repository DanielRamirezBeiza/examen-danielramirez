<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    //
    public function index()
    {

        $buildings = Building::all();
        return view ('building.index', compact('buildings'));
    }


    public function create()
    {
        return view ('building.create');
    }

    public function store(Request $request)
    {
        $building = Building::create($request->all());
        return redirect()->route('building.index');
    }


    public function show(Building $building)
    {
        return view ('building.show', compact('building'));
    }
}

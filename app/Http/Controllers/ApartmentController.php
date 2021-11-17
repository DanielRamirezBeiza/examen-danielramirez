<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Building;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    //
    public function index()
    {
        $dptos = Apartment::all();
        return view ('apartment.index', compact('dptos'));
    }

    public function create()
    {
        $edificios = Building::all();
        return view ('apartment.create', compact('edificios'));
    }

    public function store(Request $request)
    {

        //dd($request->all());
        $data = $request->validate([
            'building_id' =>'required',
            'numero' => 'required',
        ]); 

        //dd(intval($data['building_id']));
        
        $dpto = Apartment::create([
            'numero' => $data['numero'],
            'building_id' => intval($data['building_id'])
        ]);

        return redirect()->route('apartment.index');
    }


    public function show(Apartment $apartment)
    {
        return view ('apartment.show', compact('apartment'));
    }
}
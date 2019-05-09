<?php

namespace App\Http\Controllers;

use App\UserSpecies;
use Illuminate\Http\Request;
use Auth;

class UserSpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $us = UserSpecies::with('species')->get();
            //  leftjoin('species', 'us.species_id', '=', 'species.id')
            //  ->select('species.id', 'species.days', 'us.id', 'us.user_id', 'us.species_id', 'us.name', 'us.date_water')  
            //  ->get();
        
        return json_encode ($us);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $species_id, $name, $date_water)
    {
        $us =  new UserSpecies();

        $us->user_id = $user_id;
        $us->species_id =  $species_id;
        $us->name = $name;
        // $us->date_water = $date_water;

        $us->save();

        // $us= UserSpecies::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $us =  new UserSpecies();

        $params = $request->all();

        $us->user_id = $request->input('userid');
        $us->species_id = $request->input('speciesid');
        $us->name = $request->input('plantName');
        // $us->date_water = $request->input('lastWater');
        
        $us->save();

        // return $response->json([$request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(UserSpecies $userSpecies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $us = UserSpecies::findOrFail($id);

       

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $us = UserSpecies::findOrFail($id);

        // $params = $request->all();

        $us->date_water = request ('lastWater');
        // $us->user_id = request ('userid');
        // $us->species_id = request ('speciesid');
        // $us->name = request ('plantName');

     

        $us->save();

        

        // return json_encode ($us);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = UserSpecies::findOrFail($id)->delete();
        $us = UserSpecies::all();

        return json_encode ($us);
    }
}

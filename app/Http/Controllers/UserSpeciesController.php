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
       
        $us = UserSpecies::all();

        return json_encode ($us);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $species_id, $name)
    {
        $us =  new UserSpecies();

        $us->user_id = $user_id;
        $us->species_id =  $species_id;
        $us->name = $name;

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
    public function edit(UserSpecies $userSpecies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSpecies $userSpecies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSpecies  $userSpecies
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSpecies $userSpecies)
    {
        //
    }
}

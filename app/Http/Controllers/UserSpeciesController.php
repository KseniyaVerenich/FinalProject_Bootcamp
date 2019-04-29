<?php

namespace App\Http\Controllers;

use App\UserSpecies;
use Illuminate\Http\Request;

class UserSpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('UserSpecies.index', compact('user_species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

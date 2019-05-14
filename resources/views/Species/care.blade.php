@extends('layouts.app')

@section('content')
<div class='container'>
    {{-- BACK LINK --}}

    <br>
    <a href="/species" id="backBtn" style="color: #fffdef; text-decoration: none;">
        <svg id="i-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32"
            fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M20 30 L8 16 20 2" />
        </svg>
    </a>

    {{-- ADD PLANT TO LIST LINK --}}

    <object align="right">
        <a href="/species/{{$species->id}}" style="color: #fffdef; text-decoration: none;"> <svg id="i-plus"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none"
                stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M16 2 L16 30 M2 16 L30 16" />
            </svg>
        </a>
    </object>



    <br><br>
    <center><img src="{{$species->photo}}" width="auto" height="120" /></center>
    <br>
    <div class="container" id="careNames">
        <center>
            <h4 style="font-size:30px; color:#fffdef; font-family: 'Nunito', sans-serif;">{{$species->common}}</h4>
        </center>
        <center>
            <h5 style="font-style:italic; font-size:20px; color:#fffdef; font-family: 'Alegreya', serif;">
                {{$species->latin}}</h5>
        </center>
    </div>
    <br><br>
    <div class='col' id="needs">

        <p style="font-family: 'Nunito', sans-serif;"><span
                style="font-size: 20px; color:#914c3d; font-family: 'Nunito', sans-serif;"><strong>DESCRIPTION:</span></span>
            {{$species->description}}</p>

        <p style="font-family: 'Nunito', sans-serif;"><span
                style="font-size: 20px; color:#914c3d; font-family: 'Nunito', sans-serif;"><strong>WATER:</strong></span>
            {{$species->watering}}</p>

        <p style="font-family: 'Nunito', sans-serif;"><span
                style="font-size: 20px; color:#914c3d; font-family: 'Nunito', sans-serif;"><strong>LIGHT:</strong></span>
            {{$species->light}}</p>
    </div>
    <br><br><br>
    <?php
            $user = Auth::user();
        ?>

    @endsection
@extends('layouts.app')

@section('content')
<div class='container'>
        <br>
        <a href="/species" id="backBtn" style="color: #fffdef; text-decoration: none;">
            <svg id="i-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32"
                fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M20 30 L8 16 20 2" />
            </svg>
        </a>

    <br><br>
    <center><img src="{{$species->photo}}" /></center>
    <br>
    <div class="container" id="careNames">
        <center>
            <h4 style="font-size:30px; color:#fffdef; font-family: 'GlacialIndifferenceRegular';">{{$species->common}}</h4>
        </center>
        <center>
            <h5 style="font-style:italic; font-size:25px; color:#fffdef; font-family: 'GlacialIndifferenceRegular';">{{$species->latin}}</h5>
        </center>
    </div>
    <br>
    <div class='col' id="needs">
        
            <p><span style="font-size: 20px; color:#914c3d; font-family: 'GlacialIndifferenceRegular'; "><strong>DESCRIPTION:</span></span> {{$species->description}}</p>
          
                <p><span style="font-size: 20px; color:#914c3d; font-family: 'GlacialIndifferenceRegular'; "><strong>WATER:</strong></span> {{$species->watering}}</p>
                
                    <p><span style="font-size: 20px; color:#914c3d; font-family: 'GlacialIndifferenceRegular'; "><strong>LIGHT:</strong></span> {{$species->light}}</p>
    </div>
    <br><br><br>
    <?php
            $user = Auth::user();
        ?>

    @endsection
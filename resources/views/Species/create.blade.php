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

    <br><br><br>

    <div>
        <center><img src="{{$species->photo}}" width="auto" height="150"></center>
        <br>
        <center>
            <h4 style="font-size:30px; color:#fffdef; font-family: 'Nunito', sans-serif;">{{$species->common}}
            </h4>
        </center>
        <center>
            <h5 style="font-style:italic; font-size:25px; color:#fffdef; font-family: 'Alegreya', serif;">
                {{$species->latin}}</h5>
        </center>

        <br><br>
        <?php
            $user = Auth::user();
        ?>

        <add :userid="{{$user->id}}" :speciesid="{{$species->id}}"></add>
        {{-- v-bind:plantid="{{Auth::user()->id}}" --}}
    </div>

</div>

@endsection
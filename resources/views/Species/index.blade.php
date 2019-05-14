@extends('layouts.app')

@section('content')
<div class='container'>
  <br>
  <a href="/home" id="backBtn" style="color: #fffdef; text-decoration: none;">
    <svg id="i-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none"
      stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
      <path d="M20 30 L8 16 20 2" />
    </svg>
  </a>
  <br><br>
  <center><img src="img/choosePlant.png"></center>
  <br><br>

  @foreach($species as $item)

  <div class='row'>

    <div class="col-3">
      <br>
      <img src="{{$item->photo}}">
    </div>

    <div class="col-7">
      <a href="/species/{{$item->id}}/care"
        style="color: #fffdef; text-decoration: none; font-family: 'Nunito', sans-serif; ">
        <br>
        <h4 style="font-family: 'Nunito', sans-serif;">{{$item->common}}</h4>
        <h5 style="font-style:italic; font-family: 'Alegreya', serif;">{{$item->latin}}</h5>
      </a>
      <br>
    </div>
    <div class="col">
      <br>
      <a href="/species/{{$item->id}}" style="color: #fffdef; text-decoration: none;"><svg id="i-plus"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none"
          stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M16 2 L16 30 M2 16 L30 16" />
        </svg>
      </a>

    </div>
  </div>

  {{-- <li>{{$item->description}}</li>
  <li>{{$item->watering}}</li>
  <li>{{$item->light}}</li> --}}
  @endforeach


  @endsection

  <style>


  </style>
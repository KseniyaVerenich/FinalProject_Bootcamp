@extends('layouts.app')

@section('content')
<div class='container'>

        <center><img src="{{$species->photo}}"/></center>
        <br>
        
        <center><h4>{{$species->common}}</h4></center>
        <center><h5 style="font-style:italic;">{{$species->latin}}</h5></center>
        <center><p>{{$species->description}}</p>
        <center><p>{{$species->watering}}</p>
        <center><p>{{$species->light}}</p>
        <?php
            $user = Auth::user();
        ?>
    
@endsection

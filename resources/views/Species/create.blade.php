@extends('layouts.app')

@section('content')
<div class='container'>

    <div>
        <center><img src="{{$species->photo}}"></center>
        <br>
        <center><h4>{{$species->common}}</h4></center>
        <center><h5 style="font-style:italic;">{{$species->latin}}</h5></center>
        <?php
            $user = Auth::user();
        ?>
        
        <add :userid="{{$user->id}}" :speciesid="{{$species->id}}"></add>
        {{-- v-bind:plantid="{{Auth::user()->id}}" --}}
    </div>
  
</div>    

@endsection


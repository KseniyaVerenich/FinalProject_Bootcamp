@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
              

                <div class="card-body" id="pickPlant">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><img src="/img/myPlants.png"></center>
                    <br>
                    <center><a> You don't have any plants yet! </a></center>
                    <br>
                    <button id="choosePlant" type="submit" class="btn btn-primary btn-block" style="text-decoration:none;"><a href="/species">
                    Choose a Plant!</a>
                    </button>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

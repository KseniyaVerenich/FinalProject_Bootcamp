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
                    
                    <my-plants></my-plants>
                   







                    

                    <button id="choosePlant" type="submit" class="btn btn-primary btn-block" style="text-decoration:none;"><a href="/species">
                    Add New Plant!</a>
                    </button>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

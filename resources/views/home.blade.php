@extends('layouts.master')

@section('content')

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div class="container">
                        <div class="fb-profile">
                            <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
                            <img align="left" class="fb-image-profile thumbnail" src="img/people.png" alt="Profile image example"/>
                            <div class="fb-profile-text">
                                <h1> {{ Auth::user()->name }} </h1>
                                <p> {{ Auth::user()->email }} </p>

                                @if (Auth::user()->admin)
                                    <p>Tipo : Administrador</p>
                                @else
                                    <p>Tipo : Usuario</p>
                                @endif

                            </div>
                        </div>
                    </div> <!-- /container -->
                </div>


@endsection

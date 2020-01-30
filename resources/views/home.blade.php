@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Bienvenue dans votre espace personnel, {{ Auth::user()->firstname}}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex flex-row">
                      <div class="d-flex flex-column">
                        <h4>Vos informations :</h4>
                        <div style="height:1px;background-color:#000;width:100%;margin-bottom:1em;"></div>
                        <p>Nom : {{Auth::user()->lastname}}</p>
                        <p>Prénom : {{Auth::user()->firstname}}</p>
                        <p>Mail : {{Auth::user()->email}}</p>
                        <p>Bio : {{Auth::user()->bio}}</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

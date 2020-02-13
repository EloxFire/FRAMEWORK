@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Voici la liste des compétences disponibbles</h3></div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="d-flex flex-row">
            <div class="d-flex flex-column" style="hoverflow:auto;">
              <div style="hoverflow:auto" class="">
                <?php
                Use App\User;
                Use App\Skills;
                $me = Auth::user()->get();

                $nbrSkills = Skills::count();
                $skills = Skills::get();
                ?>

                <h4>Nombre de compétences total : {{$nbrSkills}}</h4>
                <h4>Liste détaillée :</h4>
                @foreach($skills as $s)
                <li>{{$s->name}}</li>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

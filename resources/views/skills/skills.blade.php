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

                $nbrSkills = Skills::count();
                $skills = Skills::get();
                ?>

                <ul class="list-group mb-2">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Compétences totales :
                    <span class="badge badge-primary badge-pill">{{ $nbrSkills }}</span>
                  </li>
                </ul>


                <div class="d-flex flex-wrap">
                  @foreach($skills as $s)
                  <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $s->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $s->logo }}</h6>
                      <p class="card-text">{{ $s->description }}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

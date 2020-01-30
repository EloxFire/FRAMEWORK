@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Voici la liste de tous les utilisateurs</h3></div>

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
                  $users = Auth::user()->get();
                ?>
                <h4>Les utilisateurs sont affichés au format : <code>{nom, prénom}</code></h4>
                <ul>
                  @foreach($users as $user)
                  <li>{{$user->lastname}} {{$user->firstname}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

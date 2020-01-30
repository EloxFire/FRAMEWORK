@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Voici la liste des compétences des utilisateurs</h3></div>

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

                $current_user = Auth::user()->id;

                $skill = DB::table('users')
                ->join('skills_user', function ($join) {
                  $join->on('users.id', '=', 'skills_user.user_id');
                })
                ->join('skills', function ($join2) {
                  $join2->on('skills_user.skills_id', '=', 'skills.id');
                })
                ->select('skills.name', 'skills_user.level')
                ->where('users.id', '=', $current_user)
                ->get();
                ?>

                @foreach($skill as $skills)
                <li>{{$test}} {{$skills->name}} {{$skills->level}}</li>
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

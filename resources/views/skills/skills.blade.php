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
                Use App\User;
                Use App\Skills;
                $me = Auth::user()->get();
                $current_user = User::find(2)->name;
                $skills = User::find(2)->Skills[0]->name;
                $level = User::find(2)->Skills[0]->pivot->level;

                // $user = Auth::user()->get();
                // $skills = $user->skills;
                ?>


                {{$current_user}} - {{$skills}} : {{$level}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

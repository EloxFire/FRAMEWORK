@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Ici, vous pouvez ajouter des compétences</h3></div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="d-flex flex-row nowrap">
            <div class="d-flex flex-column col-6">
              @if(count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              @if(\Session::has('success'))
              <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
              </div>
              @endif
              <form class="mb-5" method="POST" action="{{route('skill.store')}}">
                @csrf


                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la compétence">
                </div>

                <div class="form-group">
                  <label for="description">Description de la compétence</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="Description de la compétence">
                </div>

                <div class="form-group">
                  <label for="logo">Logo de la compétence</label>
                  <input type="text" class="form-control" id="description" name="logo" placeholder="Logo de la compétence">
                </div>

                <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

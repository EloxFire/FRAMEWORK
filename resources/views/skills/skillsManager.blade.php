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
                <p>{{\Sesssion::get('success')}}</p>
              </div>
              @endif
              <form class="mb-5" method="post" action="{{route('skill.create')}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <input type="test" class="form-control" id="name" name="name" placeholder="Nom de la compétence">
                </div>

                <div class="form-group">
                  <label for="name">Description de la compétence</label>
                  <input type="test" class="form-control" id="description" name="description" placeholder="Description de la compétence">
                </div>

                <div class="form-group">
                  <label for="level">Niveau de la compétence</label>
                  <input type="number" class="form-control" id="level" name="level" placeholder="Niveau de la compétence">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
              </form>

              <form class="mb-5">
                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <select class="form-control" name="name" id="name" placeholder="Nom de la compétence">

                  </select>
                </div>

                <div class="form-group">
                  <label for="level">Niveau de la compétence</label>
                  <input type="number" class="form-control" id="level" placeholder="Niveau de la compétence">
                </div>
                <button type="submit" class="btn btn-primary">Modifier le niveau de la compétence</button>
              </form>

              <form>
                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <select class="form-control" name="name" id="name" placeholder="Nom de la compétence">

                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Suprimer la compétence</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

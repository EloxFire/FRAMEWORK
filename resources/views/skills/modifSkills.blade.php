@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Ici, vous pouvez modifier des compétences générales</h3></div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="d-flex flex-row">
            <div class="d-flex flex-column col-6">
              @if(\Session::has('success'))
              <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
              </div>
              @endif
              <form class="mb-5" method="post" action="{{route('skill.update')}}">
                @csrf
                @method('POST')
                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <select class="form-control" name="name" id="name" placeholder="Nom de la compétence">
                    <?php
                    use App\Skills;
                    $name = Skills::get();
                    ?>
                    @foreach($name as $name)
                    <option value="{{$name->name}}">{{$name->name}}</option>
                    @endforeach
                  </select>
                </div>



                <div class="form-group">
                  <label for="level">Nouvelle description</label>
                  <input type="text" class="form-control" name="description" id="description" placeholder="Nouvelle description de la compétence">
                </div>

                <div class="form-group">
                  <label for="level">Nouveau logo de la compétence</label>
                  <input type="text" class="form-control" name="logo" id="logo" placeholder="Nouveau logo">
                </div>
                <button type="submit" class="btn btn-primary">Modifier la compétence</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

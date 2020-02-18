@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h3>Ici, vous pouvez suprimer des compétences</h3></div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="d-flex flex-row">
            <div class="d-flex flex-column col-6">
              <form method="post" action="{{route('skill.destroy')}}">
                @csrf
                @method('DELETE')
                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <select class="form-control" name="name" placeholder="Nom de la compétence">

                    <?php
                    use App\Skills;
                    $name = Skills::get();
                    ?>
                    @foreach($name as $name)
                    <option value="{{$name->name}}">{{$name->name}}</option>
                    @endforeach
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

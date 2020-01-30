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

          <div class="d-flex flex-row">
            <div class="d-flex flex-column col-6">
              <form method="post" action="">
                <?php
                ?>

                <div class="form-group">
                  <label for="name">Nom de la compétence</label>
                  <input type="test" class="form-control" id="name" placeholder="Nom de la compétence">
                </div>

                <div class="form-group">
                  <label for="level">Niveau de la compétence</label>
                  <input type="number" class="form-control" id="level" placeholder="Niveau de la compétence">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
              </form>
            </div>

            <div class="d-flex flex-column col-auto">
              <h4>Aperçu de la compétence :</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - AVAGLIANO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,800,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          html, body {
              color: #fff;
              background-color: #3a3a3a;
              font-family: 'Montserrat', sans-serif;
              font-weight: 600;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 100vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          h6{
            text-transform: uppercase;
            font-weight: 600;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }

          .links > a {
              color: #cdcdcd;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 300;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .m-b-md {
              margin-bottom: 30px;
          }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @if(Route::has('login'))
                      @auth
                        <h6>Bonjour {{Auth::user()->name}}</h6>
                        <div class="links">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <a class="dropdown-item" href="{{route('home')}}">Votre profile</a>
                          <a class="dropdown-item" target="_blank" href="https://laravel.com/docs">Doc Laravel</a>
                        </div>
                        <div class="links">
                          <a class="dropdown-item" href="{{route('users')}}">Afficher les utilisateurs</a>
                          <a class="dropdown-item" href="{{route('skills')}}">Afficher les compétences</a>
                          {{-- <a class="dropdown-item" href="{{route('addSkills')}}">Ajouter une compétence</a>
                          <a class="dropdown-item" href="{{route('modifSkills')}}">Modifier une compétence</a>
                          <a class="dropdown-item" href="{{route('deleteSkills')}}">Suprimer une compétence</a>--}}
                        </div>
                        @else
                        <h6>Bienvenue, connectez-vous !</h6>
                        @endif
                    @endauth
                </div>


            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Библиотека</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-primary">Главная страница</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Раздел 2</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Раздел 3</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Раздел 4</a></li>
          </ul>
          @if (Route::has('login'))
            <div class="col-md-3 text-end">
              @auth
                <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-outline-primary me-2">Личный кабинет</button></a>
              @else
                <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary me-2">Вход</button></a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Регистрация</button></a>
                  @endif
              @endauth
            </div>
          @endif
        </header>
      </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/custom__styles.css" rel="stylesheet" />

    <title>Regzimarx</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light sticky-top .bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">REGZIMARX</a>
        <div
          id="menu-bar"
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <div id="menu">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
          </div>
        </div>
        <div class="" id="custom-menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about-me') }}">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="my-works.html">My Works</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <canvas class="background"></canvas>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
  </body>
</html>

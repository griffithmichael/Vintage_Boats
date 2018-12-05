  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vintage Boat Association - Ontario</title>

    <!-- Bootstrap core CSS 
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>

    <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">

            @if(Auth::check())
              <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
            @else
              <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
            @endif
            



          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" 
            href="/">Vintage Boat Association Ontario</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">

            @if(Auth::check())
              <a class="btn btn-sm btn-outline-secondary" href="/home">Dashboard</a>
            @else
              <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif


            



          </div>
        </div>
      </header>

        <div class="nav-scroller py-1 mb-2">


          @if(Auth::check())

        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="/events">Events</a>
          <a class="p-2 text-muted" href="/classifieds">Classifieds</a>
          <a class="p-2 text-muted" href="/galleries">Galleries</a>
          <a class="p-2 text-muted" href="/boats">My Boats</a>

            @if(Auth::user()->is_admin)

            <a class="p-2 text-muted" href="/admin/users">Users</a>

            @endif
          @endif


{{--           <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> --}}
        </nav>
      </div>
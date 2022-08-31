<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cashier App</title>

  <link href="/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet" />
</head>

<body>
  @include('partials.header')
  <div class="container-fluid">
    <div class="row">
      @include('partials.sidebar')
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('content')
      </main>
    </div>
  </div>
    
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>
  
</html>
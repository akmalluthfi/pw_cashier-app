<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cashier App</title>

  <link href="/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="col" style="max-width: 400px">
        <h1 class="mb-3">Login</h1>
        <form method="POST" action="">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" @checked(old('remember_me'))>
            <label class="form-check-label" for="remember_me">Remember Me</label>
          </div>
          @error('loginErr')
            <div class="text-danger text-center mb-3">{{ $message }}</div>
          @enderror
          <button type="submit" class="btn btn-dark w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
    
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
  
</html>
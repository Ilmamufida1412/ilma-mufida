<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabungan</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins\fontawesome\css\all.min.css" rel="stylesheet">
  </head>
{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-success navbar-dark">
    <div class="container">
      <a class="navbar-brand">Tabungan Sekolah</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ (request()->segment('1')=='' || request()->segment('1') == 'register') ? 'active' : '' }}" 
                aria-current="page" href="{{ url('register') }}">
                register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->segment('1')=='' || request()->segment('1') == 'login') ? 'active' : '' }}" 
                aria-current="page" href="{{ url('login') }}">
                Login
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <body>
    {{-- content --}}
    <div class="margin-center">
        <div class="row justify-content-center mt-s ">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Register</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                            
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="nama@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password"  required>
                            </div>
                            <div class="mb-3">
                               <button class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- end content --}}
   
  </body>
</html>
@extends('layout.app')

@section('contents')
<div class="container-fluid my-4">
    <div class="row justify-content-center">
        <div class="col-lg-4">
    
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    
            @if(session()->has('signinError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('signinError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
            <main class="form-signin w-100 m-auto">
                <form action="signin" method="post">
                    @csrf
                    <div class="text-center">
                        <img class="" src="img/goalslogo.png" alt="" width="200">
                    </div>
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              
                  <div class="form-floating">
                      <input type="email" name="email" 
                      class="form-control @error('email') is-invalid @enderror" 
                      id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                      <label for="email">Email address</label>
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-floating">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                      <label for="password">Password</label>
                  </div>
                  <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-2">Not registered? <a href="signup">Register Now!</a></small>
              </main>
        </div>
    </div>
</div>

@endsection

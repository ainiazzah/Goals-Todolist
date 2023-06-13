@extends('layout.app')

@section('contents')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signup w-100 m-auto">
            <form action="signup" method="post">
                @csrf
                <div class="text-center">
                    <img class="" src="img/goalslogo.png" alt="" width="200">
                </div>
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
          
              <div class="form-floating">
                  <input type="text" name="username" 
                  class="form-control rounded-top @error('username') is-invalid" @enderror
                  id="username" placeholder="Username" required value="{{ old('username') }}">
                  <label for="username">Username</label>
                  @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <input type="email" name="email" 
                  class="form-control @error('email') is-invalid" @enderror
                  id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                  <label for="email">Email address</label>
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <input type="password" name="password" 
                  class="form-control rounded-bottom @error('password') is-invalid" @enderror 
                  id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                  @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
              </div>
              <button class="btn mt-3 btn-primary w-100 py-2" type="submit">Sign up</button>
              <small class="d-block text-center mt-2">Sudah punya akun? <a href="/todolist/public/">Sign In!</a></small>
            </form>
          </main>
    </div>
</div>
@endsection

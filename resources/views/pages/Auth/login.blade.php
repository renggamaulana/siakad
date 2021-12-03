@extends('layouts.main')


@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">


      @if (session()->has('success'))
        
      
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <form>
                @csrf 
              <h1 class="mh3 mb-3 fw-normal text-center">Please login</h1>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
           <small class="text-center d-block mt-3">Not Registered? <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>



@endsection
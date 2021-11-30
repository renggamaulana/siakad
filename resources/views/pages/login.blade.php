@extends('layouts.main')


@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form>
                @csrf
              <h1 class="mh3 mb-3 fw-normal text-center">Please login</h1>
              
              <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </main>
    </div>
</div>



@endsection
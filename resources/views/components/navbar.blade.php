<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">SMAN 1 Ciomas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('students') ? 'active' : '' }}" href="/students">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              {{-- {{ Request::is('*')  ? 'active' : '' }} --}}
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Information
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/admission">Admission</a></li>
                <li><a class="dropdown-item" href="#">Gallery</a></li>
                <li><a class="dropdown-item" href="#">News</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Other</a></li>
              </ul>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name }}!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </ul>
          </li>
          @else
            <li class="nav-item">
              {{-- {{ Request::is('login') ? 'active' : '' }} --}}
                <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">Login <i class="bi bi-box-arrow-in-right"></i></a>
              </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>
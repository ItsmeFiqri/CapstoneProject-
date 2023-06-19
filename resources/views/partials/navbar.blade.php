<nav class="navbar navbar-expand-lg" style="background-color: #20c997;">
  <div class="container">
    <a class="navbar-brand" ><i class="bi bi-book"></i> MATAHAR!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/"><i class="bi bi-house-door"></i> Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <!-- Memeriksa login -->
      @auth
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i> Welcome {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> LogOut</button>
              </form>
            </li>
          </ul>
        </li>
      <!-- Jikasudah Login Tampilkan... -->
      @else
      <!-- Jikasudah Belum login Login Tampilkan... -->
        <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right""></i> Login</a>
        </li>
      </ul>
      @endauth
      
    </div>
  </div>
</nav>
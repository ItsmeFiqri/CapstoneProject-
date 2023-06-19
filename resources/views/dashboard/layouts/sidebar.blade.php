<nav class="navbar" style="background-color: #20c997;">
  <div class="container">
  <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="bi bi-book"></i> MATAHAR!</h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start show" style="background-color: #20c997;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="bi bi-book"></i> MATAHAR!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard"><i class="bi bi-house-fill"></i>  Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/posts/create"><i class="bi bi-pencil-fill"></i>  Input Tugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/posts"><i class="bi bi-files"></i>  List Tugas</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
            <button type="submit" class="nav-link text-black"><i class="bi bi-box-arrow-right"></i> LogOut</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
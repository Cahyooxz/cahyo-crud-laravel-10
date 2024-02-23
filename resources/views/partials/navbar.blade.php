<nav class="navbar bg-primary navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">DATA POST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-primary">
          <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">DATA POST</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
          <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item border border-success p-2 border-opacity-10 ps-2" style="height:60px">
                <a class="nav-link" aria-current="page" href="/"><i class="bi bi-house-door me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item border border-success p-2 border-opacity-10 ps-2" style="height:60px">
                <a class="nav-link" href="{{ route('posts.index') }}"><i class="bi bi-clipboard-data me-2"></i>Data Post</a>
            </li>
        </div>
      </div>
    </div>
  </nav>
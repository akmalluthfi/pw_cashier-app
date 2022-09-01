<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-0">
  <div class="position-sticky sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Master Data</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('items*') ? 'active' : '' }}" href="/items">
          <span data-feather="archive" class="align-text-bottom"></span>
          Barang
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          Kategori
        </a>
      </li>
    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Transaksi</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Transaksi
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2" class="align-text-bottom"></span>
          Laporan
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Setting</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="./profile.php">
          <span data-feather="user" class="align-text-bottom"></span>
          Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="./logout.php">
          <span data-feather="log-out" class="align-text-bottom text-danger"></span>
          Keluar
        </a>
      </li>
    </ul>
  </div>
</nav>
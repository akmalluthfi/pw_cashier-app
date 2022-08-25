<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-0">
  <div class="position-sticky sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="./">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('items/*', 'items') ? 'active' : '' }}" href="./items">
          <span data-feather="archive" class="align-text-bottom"></span>
          Items
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Orders
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users" class="align-text-bottom"></span>
          Customers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2" class="align-text-bottom"></span>
          Reports
        </a>
      </li>
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
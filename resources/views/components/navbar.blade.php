<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" role="button">
          <i class="fa-solid fa-gear"></i>
          <span>Settings</span>
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
          <a href="" class="dropdown-item">
            <span>Log History</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/acc" class="dropdown-item">
            <span>Manage Account</span>
          </a>
          <div class="dropdown-divider"></div>
          <form action="/logout" method="POST">
            @csrf
            <button class="dropdown-item" onclick="confirmLogout()">Logout</button>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
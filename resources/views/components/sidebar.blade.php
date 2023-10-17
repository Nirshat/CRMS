<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4" style="background:#f0f0f0">
    <!-- Brand Logo -->
    <!-- <a class="brand-link" style="background:#424850;"> -->
    <a class="brand-link" style="background:#f0f0f0">
      <img src="dist/img/AdminLTELogo.png" alt="LOGO" class="brand-image img-circle elevation-3" style="opacity: .8" role="button">
      <span class="brand-text font-weight-light" role="button">CRMS</b></span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a role="button" class="d-block">Admin</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa-sharp fa-solid fa-chart-simple"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/customers" class="nav-link active">
              <i class="nav-icon fa-solid fa-table-list"></i>
              <p>
                Enlistment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" role="button">
              <i class="nav-icon fa-solid fa-gear"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/acc" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Account</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="" class="nav-link" onclick="confirmLogout()">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log-out</p>
                </a>
              </li> --}}
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
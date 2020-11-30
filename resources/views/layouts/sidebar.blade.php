<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Antropometri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{url('/user')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Kelola User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/role')}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Kelola Role</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('/pasien')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Kelola Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/gejala')}}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Kelola Gejala</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/gangguan_gizi')}}" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Kelola Diagnosa</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('/rekap')}}" class="nav-link">
                  <i class="nav-icon fas fa-share"></i>
                  <p>Kelola Relasi</p>
                </a>
              </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
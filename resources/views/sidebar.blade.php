<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">PERPUSTAKAAN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('get_anggota') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('get_buku') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('get_petugas') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
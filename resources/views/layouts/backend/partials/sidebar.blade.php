<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/assets/img/space-capsule.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LaraVueStarter</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <router-link to="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <!-- Developer console -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog red"></i>
              <p>
                Developer Console
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/module" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>Module Mgt</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/permission" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>Permission Mgt</p>
                </router-link>
              </li>
            </ul>
          </li>
          <!-- End -->
          <!-- Access Contole -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Access Control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/role" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>Role Mgt</p>
                </router-link>
              </li>
            </ul>
          </li>
          <!-- End -->
          <!-- Settings -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs cyan"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/category" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>Category</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </router-link>
              </li>
            </ul>
          </li>
          <!-- End -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th blue"></i>
              <p>
                Application Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/category" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>Category</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </router-link>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
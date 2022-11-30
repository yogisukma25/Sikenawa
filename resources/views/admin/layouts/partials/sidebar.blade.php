
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('dashboard.admin')}}" aria-expanded="false">
                  <i class="fas fa-home feather-icon"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('notifications.admin')}}" aria-expanded="false">
                  <i class="fas fa-bell feather-icon"></i>
                  <span class="hide-menu">Notifikasi</span>
                </a>
              </li>
              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('report.admin')}}" aria-expanded="false">
                  <i class="fas fa-book feather-icon"></i>
                  <span class="hide-menu">Daftar Pengaduan</span>
                </a>
              </li>
              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('DataMap.admin')}}" aria-expanded="false">
                  <i class="fas fa-chart-area feather-icon"></i>
                  <span class="hide-menu">Data Peta</span>
                </a>
              </li>
              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('map.admin')}}" aria-expanded="false">
                  <i class="fas fa-globe feather-icon"></i>
                  <span class="hide-menu">Peta</span>
                </a>
              </li>
              <li class="nav-small-cap"><span class="hide-menu">Pengaturan</span></li>
              <li class="sidebar-item"> 
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <i class="fas fa-user-circle feather-icon"></i>
                    <span class="hide-menu">Autentikasi</span>
                </a>
                  <ul aria-expanded="false" class="collapse first-level base-level-line">
                      <li class="sidebar-item">
                        <a href="{{ route('user.admin')}}" class="sidebar-link">
                          <span class="hide-menu"> Akun Pengguna </span>
                        </a>
                      </li>
                  </ul>
              </li>

              <li class="sidebar-item"> 
                <a class="sidebar-link sidebar-link" href="{{ route('home.user')}}" aria-expanded="false">
                  <i data-feather="log-out" class="feather-icon"></i>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
              
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-navy elevation-4">
  
  <a href="/" class="brand-link d-flex justify-content-center">
    <img src="/image/belajar-yuk-logo.png" alt="Belajar Yuk Logo" class="brand-image elevation-3 mr-0" style="width: 33px !important">
    <span class="brand-text font-weight-light align-middle ml-0 h5">Belajar Yuk</span>
  </a>
  
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/" class="nav-link <?= $menu === 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fa fa-fw fa-tachometer-alt align-middle"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/siswa" class="nav-link <?= $menu === 'data siswa' ? 'active' : '' ?>">
            <i class="nav-icon fa fa-fw fa-users align-middle"></i>
            <p>
              Data Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/video-pembelajaran" class="nav-link <?= $menu === 'video pembelajaran' ? 'active' : '' ?>">
            <i class="nav-icon fab fa-fw fa-youtube align-middle"></i>
            <p>
              Video Pembelajaran
            </p>
          </a>
        </li>
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
          </ul>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
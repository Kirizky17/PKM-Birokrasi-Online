<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{route('pengusul.main')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.main') active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Beranda 
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{route('pengusul.usulan')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.usulan') active @endif">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Pengajuan Usulan
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview @if(Route::current()->getName() == 'pengusul.laporan.logbook' || Route::current()->getName() == 'pengusul.laporan.kemajuan' || Route::current()->getName() == 'pengusul.laporan.akhir') menu-open @endif">
      <a href="#" class="nav-link @if(Route::current()->getName() == 'pengusul.laporan.logbook' || Route::current()->getName() == 'pengusul.laporan.kemajuan' || Route::current()->getName() == 'pengusul.laporan.akhir') active @endif">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Pelaksanaan Kegiatan
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('pengusul.laporan.logbook')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.laporan.logbook') active @endif">
            <i class="far fa-circle nav-icon"></i>
            <p>Catatan Harian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('pengusul.laporan.kemajuan')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.laporan.kemajuan') active @endif">
            <i class="far fa-circle nav-icon"></i>
            <p>Laporan Kemajuan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('pengusul.laporan.akhir')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.laporan.akhir') active @endif">
            <i class="far fa-circle nav-icon"></i>
            <p>Laporan Akhir</p>
          </a>
        </li>
      </ul>
      </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
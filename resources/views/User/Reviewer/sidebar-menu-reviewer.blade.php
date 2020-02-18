<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{route('reviewer.main')}}" class="nav-link @if(Route::current()->getName() == 'pengusul.main') active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Beranda 
        </p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
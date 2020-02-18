<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('images/polban.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PKM POLBAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      @if(Session::get("role") == 'pengusul')
        @include('User\Pengusul\sidebar-menu-pengusul')
      @else
        @include('User\Reviewer\sidebar-menu-reviewer')
      @endif
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          @if(Session::has("nama") && Session::get("role") == 'pengusul')
            <a class="nav-link" style="padding-top: 0px;padding-bottom: 0px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style="height: 40px; width: 40px; margin-left: 10px; margin-right: 10px" src="https://akademik.polban.ac.id/fotomhsrekap/{{Session::get('username')}}.jpg" class="img-circle" alt="User Image">
              <p style="height: initial; display: inline-block;">{{ucfirst(Session::get('nama'))}}</p>
            </a>
          @else
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
              <p style="height: initial; display: inline-block;">{{ucfirst(Session::get('nama'))}}</p>
            </a>
          @endif
          <!-- <i class="fas fa-user"></i> -->
        <div class="dropdown-menu dropdown-menu-lg-right p-2 text-center navbar-dark color-white" style="min-width: 300px; min-height: 300px; border-radius: 0;margin-top: 8px;">
          <div class="m-3">
            @if(Session::has("nama") && Session::get("role") == 'pengusul')
              <img style="height: 6rem; width: 6rem;" src="https://akademik.polban.ac.id/fotomhsrekap/{{Session::get('username')}}.jpg" class="img-circle" alt="User Image">
            @else
              <img style="height: 6rem; width: 6rem;" src="{{asset('images/user-logo-white.png')}}" class="img-circle" alt="User Image">
            @endif
          </div>
          <div class="info m-4">
            <h5>{{ucfirst(Session::get('nama'))}}<br>{{ucfirst(Session::get("role"))}}</h5>
          </div>
          <div>
            <a href="{{ route('user.logout') }}" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->


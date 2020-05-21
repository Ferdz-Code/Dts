<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ml-3">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      </li>
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
    </ul>

    <!-- SEARCH FORM 
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new routes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 user requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- Quick Action Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-fan"></i>
          <!--<span class="badge badge-primary navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header"><strong>Quick Actions</strong></span>
          <div class="dropdown-divider"></div>
          <a href="{{route('document.index')}}" class="dropdown-item">
            <i class="fas fa-folder mr-2"></i> Create Document
            <!--<span class="float-right text-muted text-sm">3 mins</span>-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('user.index')}}" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Create User
            <!--<span class="float-right text-muted text-sm">12 hours</span>-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('role')}}" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Create Role
            <!--<span class="float-right text-muted text-sm">2 days</span>-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2"> <!--dark to light-->
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/ARTA_LOGO.png" alt="ARTA Logo" class="brand-image img-circle elevation-2"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>ARTA</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><strong>{{ Auth::user()->name }}</strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active"> <!--class="nav-link active">-->
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('document.index')}}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Create Document
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Documents
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('received')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Receive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('outgoing')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Outgoing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('internal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Internal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('closed')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Closed</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Inbox
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('myreceived')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Receive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('myoutgoing')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Outgoing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('myinternal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Internal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('myclosed')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Closed</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Account
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('role')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-question-circle"></i>
              <p>
                Help
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('faqs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faqs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('downloadable')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dowbnloadable</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('report')}}" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Reports
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('settings')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-question-circle"></i>
                <p>
                  Tab Layout
                  <i class="fas fa-angle-left right"></i>
                  <!--<span class="badge badge-info right">6</span>-->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                  <a href="{{route('tab_received')}}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                    <p>
                      Documents
                    </p>
                  </a>
      
                </li>
                <li class="nav-item has-treeview">
                  <a href="tab_myreceived" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                      Inbox
                    </p>
                  </a>
                </li>         
      
                  <li class="nav-item has-treeview">
                    <a href="{{route('tab_account')}}" class="nav-link">
                      <i class="nav-icon far fa-user"></i>
                      <p>
                        Account
                      </p>
                    </a>
                  </li>
      
                  <li class="nav-item has-treeview">
                    <a href="{{route('tab_help')}}" class="nav-link">
                      <i class="nav-icon far fa-question-circle"></i>
                      <p>
                        Help
                      </p>
                    </a>
                  </li>
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')                   

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">FerdzLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>

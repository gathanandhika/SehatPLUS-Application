<!-- Logo -->
<a href="#" style="background-color: #00a65a;" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"></b>Sehat Plus</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sehat Plus</b> Admin</span>
 </a>
 <!-- Header Navbar: style can be found in header.less -->
 <nav class="navbar navbar-static-top" style="background-color: #00a65a;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
             </a>

    <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">user</span>
             </a>
             <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                   <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                   <p>
                   </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                   <div class="pull-right">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-default btn-flat" type="submit">Log Out</button>
                    </form>
                      {{-- <a href="{{ asset('assets/database/config_signout.php') }}" class="btn btn-default btn-flat">Sign out</a> --}}
                   </div>
                </li>
             </ul>
          </li>
       </ul>
    </div>
 </nav>

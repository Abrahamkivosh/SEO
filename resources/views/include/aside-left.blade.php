<aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
          {{--  <div class="image">
            <img src="assets/images/xs/avatar1.jpg" width="48" height="48" alt="User" /> </div>  --}}

          <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">{{ auth()->user()->name }}</div>
            <div class="email">{{ auth()->user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
              <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
              <ul class="dropdown-menu float-right">
                <li>
                  <a href="profile">
                    <i class="material-icons">person</i>Profile</a>
                </li>

                <li>
                   {{-- <a href="{{ route('logout') }}">
                    <i class="material-icons">input</i>Sign Out</a> --}}

                     <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form>


                </li>

              </ul>
            </div>
          </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
          <ul class="list">
            <li class="active open">
              <a href="home">
                <i class="zmdi zmdi-home"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="post">
                <i class="zmdi zmdi-email"></i>
                <span>Inbox</span>
              </a>
            </li>
            <li>
              <a href="Ongoing-SEO-Campaigns">
                <i class="zmdi zmdi-trending-up"></i>
                <span>Ongoing SEO campaigns</span>
              </a>
              </li>
              <li>
               <a href="active-clients">
                <i class="zmdi zmdi-accounts"></i>
                <span>Active Clients</span>
              </a>
            </li>
            <li>
               <a href="expired-services">
                <i class="zmdi zmdi-calendar-close"></i>
                <span>Expired Services</span>
              </a>
            </li>





            <li>
              <a href="changelogs">
                <i class="zmdi zmdi-time-restore"></i>
                <span>Changelogs</span>
              </a>
            </li>
            <li class="header">MORE FUNCTIONS</li>
            <li>
              <a href="/">
                <i class="zmdi zmdi-chart-donut col-red"></i>
                <span>Add client</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="zmdi zmdi-chart-donut col-amber"></i>
                <span>Remove Client</span>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <i class="zmdi zmdi-chart-donut col-blue"></i>
                <span>Information</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- #Menu -->
      </aside>

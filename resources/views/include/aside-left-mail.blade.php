<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">

        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">{{ Auth::user()->name }} </div>
            <div class="email">{{ Auth::user()->email }} </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="profile">
                            <i class="material-icons">person</i>Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">group</i>Followers</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">shopping_cart</i>Sales</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">favorite</i>Likes</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                            <li>

                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                         {{ __('Logout') }}
                                             </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         @csrf
                                              </form>


                                 </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/home" >
                    <i class="zmdi zmdi-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active open">
                <a href="/post">
                    <i class="zmdi zmdi-email"></i>
                    <span>Inbox</span>
                </a>
            </li>
            <li>
                <a href="/post/create" >
                    <i class="zmdi zmdi-plus-circle"></i>
                    <span>Compose Mail</span>
                </a>
            </li>
            {{-- <li>
                <a href="/post/show" >
                    <i class="zmdi zmdi-file-text"></i>
                    <span>Single Mail</span>
                </a>
            </li> --}}

        </ul>
    </div>
    <!-- #Menu -->
</aside>

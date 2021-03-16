<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="ion ion-navicon-round"></i>
                </a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i
                    class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                </div>
                <div class="dropdown-list-content">
                    @foreach ($notification as $item)
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <img alt="image" src="{{ $item->user->avatar }}"
                                class="rounded-circle dropdown-item-img">
                            <div class="dropdown-item-desc">
                                <b>{{ $item->user->name }}</b> request promotion
                                <div class="time">{{ $item->created_at->diffForHumans() }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg">
                <i class="ion ion-android-person d-lg-none"></i>
                <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ion ion-log-out"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
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
                    @foreach ($notification->where('user_id', Auth::id())->where('status', '!=', 'requested')->take(15)->get() as $item)
                        <a href="{{ route('seller.promotion.show', $item->id) }}" class="dropdown-item dropdown-item-unread">
                            <img alt="image" src="{{ $item->product->image ? Storage::url($item->product->image) : 'http://via.placeholder.com/200' }}"
                                class="rounded-circle dropdown-item-img">
                            <div class="dropdown-item-desc">
                                <b>{{ $item->product->name }}</b> request promotion is {{ $item->status }}
                                <div class="time">{{ $item->updated_at->diffForHumans() }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg">
                <i class="ion ion-android-person d-lg-none"></i>
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ auth()->user()->name }}
                </div>
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
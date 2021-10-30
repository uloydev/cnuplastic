<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-user">
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-role">
                    {{ Auth::user()->email }}
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard')? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                <a href="{{ route('user.dashboard') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Account</li>
            <li class="{{ Request::is('account-setting') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Account Setting">
                <a href="{{ route('user.account-setting') }}"><i class="ion ion-person"></i> My Account</a>
            </li>
            <li class="menu-header">Orders</li>
            <li class="{{ Request::is('order/unpaid') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Unpaid Order">
                <a href="{{ route('user.order.unpaid') }}"><i class="ion ion-bag"></i> Unpaid Order</a>
            </li>
            <li class="{{ Request::is('order/paid') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Paid Order">
                <a href="{{ route('user.order.paid') }}"><i class="ion ion-bag"></i> Paid Order</a>
            </li>
            <li class="{{ Request::is('order/success') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Order Success">
                <a href="{{ route('user.order.success') }}"><i class="ion ion-bag"></i> Order Success </a>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4">
            <a href="{{ route('index') }}" class="btn btn-credits btn-shadow btn-round has-icon has-icon-nofloat btn-block text-center font-weight-bold">
                Shop Now
            </a>
        </div>
    </aside>
</div>

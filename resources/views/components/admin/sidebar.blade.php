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
            <li class="{{ Request::is('admin/dashboard') || Request::is('admin') ? 'active' : '' }}"
                data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                <a href="{{ route('admin.dashboard') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/feedback*') ? 'active' : '' }}"
                data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                <a href="{{ route('admin.feedback.index') }}">
                    <i class="ion ion-email"></i>
                    <span>Feedback</span>
                </a>
            </li>

            <li data-toggle="tooltip" data-placement="right" 
            data-original-title="List User" 
            class="{{ Request::is('admin/seller*') ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}">
                    <i class="ion ion-person"></i> List User
                </a>
            </li>

            <li class="{{ Request::is('admin/category*') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data Category">
                <a href="{{ route('admin.category.index') }}">
                    <i class="ion ion-bag"></i>Category
                </a>
            </li>

            <li class="{{ Request::is('admin/product*') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data Product">
                <a href="{{ route('admin.product.index', '') }}">
                    <i class="ion ion-bag"></i>Product
                </a>
            </li>

            <li class="{{ Request::is('admin/order/unpaid') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data order">
                <a href="{{ route('admin.order.filter', 'unpaid') }}">
                    <i class="ion ion-bag"></i>Unpaid Order
                </a>
            </li>

            <li class="{{ Request::is('admin/order/paid') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data order">
                <a href="{{ route('admin.order.filter', 'paid') }}">
                    <i class="ion ion-bag"></i>Paid Order
                </a>
            </li>

            <li class="{{ Request::is('admin/order/finished') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data order">
                <a href="{{ route('admin.order.filter', 'finished') }}">
                    <i class="ion ion-bag"></i>Finish Order
                </a>
            </li>

            {{-- <li class="{{ Request::is('admin/payment') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data order">
                <a href="{{ route('admin.payment.index') }}">
                    <i class="ion ion-bag"></i> Metode Pembayaran
                </a>
            </li> --}}
        </ul>
    </aside>
</div>

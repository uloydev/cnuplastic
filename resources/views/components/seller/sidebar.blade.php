<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image" src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'http://via.placeholder.com/200' }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->store }}</div>
                <div class="user-role">
                    {{ Auth::user()->name }}
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('seller/dashboard') || Request::is('seller') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                <a href="{{ route('seller.dashboard') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Account</li>
            <li class="{{ Request::is('seller/account-setting*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Account Setting">
                <a href="{{ route('seller.account-seetting') }}"><i class="ion ion-person"></i> My Account</a>
            </li>
            <li class="{{ Request::is('seller/account-verification*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Verification Account">
                <a href="{{ route('seller.account-verification') }}"><i class="ion ion-android-checkmark-circle"></i>
                    Verification</a>
            </li>

            <li class="menu-header">Product</li>
            <li class="{{ Request::is('seller/product*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Data Product">
                <a href="{{ route('seller.product.index') }}"><i class="ion ion-bag"></i> Product</a>
            </li>
            <li class="{{ Request::is('seller/promotion*') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" data-original-title="Request Promotion Product">
                <a href="{{ route('seller.promotion.index') }}"><i class="ion ion-ios-compose"></i> Request Promotion</a>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4">
            <a href="#" class="btn btn-credits btn-shadow btn-round has-icon has-icon-nofloat btn-block"
                data-toggle="tooltip" data-placement="bottom" data-original-title="Develop by Biro PTI">
                <i class="ion ion-ios-information-outline"></i>
                <div><b>CREDITS</b></div>
            </a>
        </div>
    </aside>
</div>

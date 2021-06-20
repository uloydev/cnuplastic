<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image"
                    src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'http://via.placeholder.com/200' }}">
            </div>
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
                <a href="{{ route('admin.feedback.index') }}"><i class="ion ion-email"></i><span>Feedback</span></a>
            </li>

            <li class="menu-header">Seller</li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="List Member"
                class="{{ Request::is('admin/seller*') ? 'active' : '' }}">
                <a href="{{ route('admin.seller.index') }}"><i class="ion ion-person"></i>List Member</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Request Verification"
                class="{{ Request::is('admin/account-verification*') ? 'active' : '' }}">
                <a href="{{ route('admin.account-verification.index') }}"><i class="ion ion-android-checkmark-circle"></i>Request Verification</a>
            </li>
            <li class="{{ Request::is('admin/product*') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data Product">
                <a href="{{ route('admin.product.index') }}"><i class="ion ion-bag"></i>Product</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Request Promotion"
                class="{{ Request::is('admin/promotion*') ? 'active' : '' }}">
                <a href="{{ route('admin.promotion.index') }}"><i class="ion ion-android-mail"></i> Request
                    Promotion</a>
            </li>

            <li class="menu-header">Merchandise</li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Merchandise"
                class="{{ Request::is('admin/merchandise') || Request::is('admin/merchandise/*') ? 'active' : '' }}">
                <a href="{{ route('admin.merchandise.index') }}"><i class="ion ion-pricetags"></i>Merchandise</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Merchandise Category"
                class="{{ Request::is('admin/merchandise-category*') ? 'active' : '' }}">
                <a href="{{ route('admin.merchandise-category.index') }}"><i class="ion ion-android-list"></i>Merchandise Category</a>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4">
            <a href="#" class="btn btn-credits btn-shadow btn-round has-icon has-icon-nofloat btn-block"
                data-toggle="tooltip" data-placement="bottom" data-original-title="DEVELOPED BY PTI">
                <i class="ion ion-ios-information-outline"></i>
                <div><b>CREDITS</b></div>
            </a>
        </div>
    </aside>
</div>

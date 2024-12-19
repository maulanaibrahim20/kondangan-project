<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{ url('/assets') }}/images/logo/small-logo.png" alt=""><img class="img-fluid for-dark"
                    src="{{ url('/assets') }}/images/logo/small-white-logo.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ url('/assets') }}/images/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ url('/assets') }}/images/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"> </i></div>
                    </li>
                    <li class="sidebar-list">
                        @if (Auth::user()->is_admin == true)
                            <a class="sidebar-link sidebar-title link-nav {{ Request::segment(2) == 'dashboard' ? 'menu-active' : '' }}"
                                href="{{ url('/admin/dashboard') }}">
                                <i class="fa fa-home fa-lg"></i>
                                <span>Dashboard</span>
                            </a>
                        @elseif (Auth::user()->is_admin == false)
                            <a class="sidebar-link sidebar-title link-nav {{ Request::segment(2) == 'dashboard' ? 'menu-active' : '' }}"
                                href="{{ url('/admin/dashboard') }}">
                                <i class="fa fa-home fa-lg"></i>
                                <span>Dashboard</span>
                            </a>
                        @else
                            <p>null</p>
                        @endif
                    </li>
                    @can('admin')
                        <li class="sidebar-list"><a
                                class="sidebar-link sidebar-title link-nav {{ Request::segment(2) == 'user' ? 'menu-active' : '' }}"
                                href="{{ url('/admin/user') }}">
                                <i class="fa fa-user fa-lg"></i>
                                <span>User</span></a>
                        </li>
                    @endcan
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

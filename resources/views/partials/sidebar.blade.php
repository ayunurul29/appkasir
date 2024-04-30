<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="align-items-center justify-content-between">
            <a href="{{ url('index.html') }}" class="text-nowrap logo-img">

            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">

                    <i class="ti ti-dots nav-small-cap-icon fs-10"></i>
                    <span class="hide-menu">KASIR</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('pelanggans.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Customer</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('products.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i>
                        </span>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('penjualans.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-checkup-list"></i>
                        </span>
                        <span class="hide-menu">Selling</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('details.create') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-list-details"></i>
                        </span>
                        <span class="hide-menu">Sales Detail</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    @can('Admin')
                        <a class="sidebar-link" href="{{ route('users.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-user"></i>
                            </span>
                            <span class="hide-menu">User Management</span>
                        </a>
                    </li>
                @endcan

                <li class="sidebar-item">

                    <a class="sidebar-link" href="{{ route('details.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-folder"></i>
                        </span>
                        <span class="hide-menu">Report</span>
                    </a>
                </li>




        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

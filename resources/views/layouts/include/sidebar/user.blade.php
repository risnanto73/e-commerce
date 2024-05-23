<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('user.my-transaction.*') ? '' : 'collapsed' }}"
                data-bs-target="#components-transaction" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Transaction</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-transaction"
                class="nav-content collapse {{ request()->routeIs('user.my-transaction.index') ? 'show' : '' }} "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.my-transaction.index') }}"
                        class="{{ request()->routeIs('user.my-transaction.index', 'user.my-transaction.show') ? 'active' : '' }} "data-bs-parent="#sidebar-nav">
                        <i class="bi bi-circle"></i><span>My Transaction</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
<nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
    <div class="position-sticky sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a aria-current="page" class="nav-link {{ $active === 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    <span class="align-text-bottom" data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="page" class="nav-link {{ $active === 'category' ? 'active' : '' }}"
                    href="{{ route('category.index') }}">
                    <span class="align-text-bottom" data-feather="list"></span>
                    Menu Category
                </a>
            </li>
            <li class="nav-item">
                <a aria-current="page" class="nav-link {{ $active === 'menu' ? 'active' : '' }}"
                    href="{{ route('menu.index') }}">
                    <i class="fa-solid fa-utensils" style="margin-right: 8px"></i>
                    Menu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="align-text-bottom" data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center text-muted text-uppercase mb-1 mt-4 px-3">
            <span>Saved reports</span>
            <a aria-label="Add a new report" class="link-secondary" href="#">
                <span class="align-text-bottom" data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="align-text-bottom" data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="align-text-bottom" data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="align-text-bottom" data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="align-text-bottom" data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>

    </div>
</nav>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 fs-6 me-0 px-3" href="#">{{ config('app.name', 'Laravel') }}</a>

    <div>
        <li class="nav-item dropdown">

            <ul>

                <li class="nav-item dropdown mx-4">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        href="#" id="navbarDropdown" role="button">
                        {{ Auth::user()->name }}
                    </a>

                    <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </li>
    </div>
</header>

<header class="border-bottom p-2">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img src="/assets/icon.png" alt="" height="30px" width="30px">
            <ul class="nav md-mb-0 justify-content-center col-lg-auto me-lg-auto">
                <li><a href="/dashboard" class="nav-link link-dark px-3">Dashboard</a></li>
                <li><a href="/cart" class="nav-link link-dark px-3">Cart</a></li>
                @if ($user)
                    @if ($role_id == '1')
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="detailMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="detailMenu">
                            <li><a class="dropdown-item" href="/category/edit">Manage Category</a></li>
                            <li><a class="dropdown-item" href="/game/edit">Manage Game</a></li>
                        </ul>
                    @endif
                @endif
            </ul>
            <div class="dropdown">
                <!-- not guest-->
                @if ($user)
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="detailMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="detailMenu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                @else
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="detailMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Guest
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="detailMenu">
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</header>

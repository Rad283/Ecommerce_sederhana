<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-shopping-bag"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link  @if (request()->routeIs('admin.index')) active @endif"
                    href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item"><a class="nav-link  @if (request()->routeIs('admin.profile')) active @endif"
                    href="{{ route('admin.profile') }}"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item"><a
                    class="nav-link  @if (request()->routeIs('produk.index')) active @endif"href="{{ route('produk.index') }}"><i
                        class="fas fa-table"></i><span>Produk</span></a><a class="nav-link" href="{{ url('admin/pesanan') }}"><i
                        class="fas fa-shopping-cart"></i><span>Pesanan</span></a><a class="nav-link" href="#"><i
                        class="fas fa-table"></i><span>Daftar User</span></a>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm nav-link"
                        onclick="return confirm('Yakin ingin logout?')"> <i
                            class="fas fa-user-circle"></i>Logout</button>
                </form>
            </li>

        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle"
                type="button"></button></div>
    </div>
</nav>

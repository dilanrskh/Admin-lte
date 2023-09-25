<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <img src="{{asset('images/sp.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-7" <span class="brand-text font-weight-bold">DILANRSKH</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('index.home') }}" class="d-block font-weight-semibold">Halo, {{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-simple"></i>
                        <p>
                            Menu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('index.data.member') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Data Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('index.data.user') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Data User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('index.member') }}" class="nav-link">
                                <i class="fa-solid fa-o nav-item"></i>
                                <p>&emsp; Acc Member</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Merk Kendaraan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('km.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Motor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kb.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mobil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Kendaraan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index.motor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Motor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mobil</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>

</aside>
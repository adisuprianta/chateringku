<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Owner</h3>
                <strong>AO</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/adminhome">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="{{url('/admin_produk')}}">
=======
                    <a href="{{ url('/admin_produk') }}">
>>>>>>> dimas
                    <i class='fas fa-boxes'></i>  
                        Menu / Produk
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-inbox"></i>
                        Pesanan
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('/admin_pesanan')}}">Pesanan Masuk</a>
                        </li>
                        <li>
                            <a href="{{url('/admin_diterima')}}">Pesanan Diterima</a>
                        </li>
                        <li>
                            <a href="{{url('/admin_batal')}}">Pesanan Batal</a>
                        </li>
                    </ul>
                </li>
                <li>
<<<<<<< HEAD
                <a href="{{ url('/employees') }}">
=======
                    <a href="{{ url('/employees') }}">
>>>>>>> dimas
                    <i class="fas fa-users"></i>
                        Pegawai
                    </a>
                </li>
                <li>
                    <a href="{{ url('/salaries') }}">
                        <i class="fas fa-image"></i>
                        Penggajian
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        Keuangan
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book"></i>
                        Laporan
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Laporan 1</a>
                        </li>
                        <li>
                            <a href="#">Laporan 2</a>
                        </li>
                        <li>
                            <a href="#">Laporan 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    By Cateringku
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link">Selamat Datang, Admin</a>
                            </li>
                            <li class="nav-item active">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
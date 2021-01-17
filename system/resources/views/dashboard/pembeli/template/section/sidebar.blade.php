@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}

@endphp

<nav class="navbar-default navbar-side fixed" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="{{checkRouteActive('admin/beranda')}}">
                        <a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li class="{{checkRouteActive('admin/produk')}}">
                        <a href="{{url('admin/produk')}}"><i class="fa fa-desktop"></i> Produk Saya</a>
                    </li>
					<li class="{{checkRouteActive('admin/produk/create')}}">
                        <a href="{{url('admin/produk/create')}}"><i class="fa fa-bar-chart-o"></i> Jual Produk</a>
                    </li>
                    <li class="{{checkRouteActive('admin/kategori')}}">
                        <a href="{{url('admin/kategori')}}"><i class="fa fa-qrcode"></i> Kategori  </a>
                    </li>
                    <li class="{{checkRouteActive('admin/user')}}">
                        <a href="{{url('admin/user')}}"><i class="fa fa-qrcode"></i> User  </a>
                    </li>
                    
                </ul>

            </div>

        </nav>
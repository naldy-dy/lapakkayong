@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}

@endphp

<nav class="navbar-default navbar-side fixed" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="{{checkRouteActive('admin/beranda')}}">
                        <a href="{{url('penjual/penjual-dashboard')}}"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li class="{{checkRouteActive('admin/produk')}}">
                        <a href="{{url('penjual/penjual-produk')}}"><i class="fa fa-desktop"></i> Produk</a>
                    </li>
                    <li class="{{checkRouteActive('admin/produk/create')}}">
                        <a href="{{url('admin/produk/create')}}"><i class="fa fa-bar-chart-o"></i> Pembeli</a>
                    </li>
                
                
                </ul>

            </div>

        </nav>
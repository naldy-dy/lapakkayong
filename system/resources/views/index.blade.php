<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- hiden navigasi -->
<!-- end hiden navigasi -->
    <!-- Required meta tags -->
   
   @include('section.assets')


    <title>Lapak Kayong</title>
  </head>
  <body>
    <!-- header -->

  @include('section.header')

    <!-- end header -->
<!-- Banner !-->
<div class="banner mt-6" style="margin-top: 180px">
  <div class="container-fluid">
    <div class="row p-2">
      <div class="banner-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="banner-2">
        <div id="banner2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#banner2" data-slide-to="0" class="active"></li>
            <li data-target="#banner2" data-slide-to="1"></li>
            <li data-target="#banner2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{url('public')}}/assets/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#banner2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#banner2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->
<!--head kategori -->
<div class="container-fluid">
  <div class="card-header my-2" style="background: #c70039">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
        <h3 class="text-white">Kategori</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- isi kategori -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 my-3">
      <div class="kategori">
@foreach($list_kategori as $kategori)        
      <a href="">
      <div class="kategori-box border-0">
          <img src="{{url('public')}}/assets/kategori/7.jpg">
          <div class="text-center pt-2">
            <p>{{ucwords($kategori->nama)}}</p>
          </div>
        </div>
      </a>
@endforeach 
    </div>
  </div>
   
  </div>
</div>

<!--head Produk -->


<div class="container-fluid">
  <div class="card-header my-2" style="background: #c70039">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
        <h3 class="text-white">Produk Terbaru</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-sm-12">
      <div class="card">
        <div class="card-header">
          Filter Berdasarkan Harga
        </div>
        <div class="card-body">
        <form action="{{url('index')}}" method="post">
          @csrf
              <div class="form-group">
                <div class="col-md-6">
                  <label class="">Harga Min</label>
                  <input type="number" name="harga_min" class="form-control"value="{{$harga_min ?? ''}}">
                </div>
              <div class="col-md-6">
                  <label class="">Harga Max</label>
                <input type="number" name="harga_max" class="form-control"value="{{$harga_max ?? ''}}">
              </div>
          </div>
              <button class="btn btn-danger my-3 float-right">Filter</button>
        </form>
        </div>
      </div>
      <div class="card my-3">
        <div class="card-header">
          Filter Berdasarkan Lokasi
        </div>
        <div class="card-body">
          
        <form>
            <label class="">Lokasi</label>
          <div class="form-group">
            <select class="form-control" name="lokasi">
                @foreach($list_produk as $produk)
              <option class="form-control">{{ucwords($produk->lokasi)}}</option>
              @endforeach
            </select>
          </div>
           <button class="btn btn-danger my-3 float-right">Filter</button>
        </form>
        </div>
      </div>
    </div>   
    <div class="col-md-9 my-3">
{{$list_produk->links()}}
      @foreach($list_produk->sortByDesc('uuid') as $produk)
         <a href="{{url('detail', $produk->uuid)}}"> 
          <div class="produk-box mb-3 ml-2">
            <img src="{{url("public/$produk->foto")}}" width="100%">
             <div class="p-2">
                <h4>{{ucwords($produk->nama)}}</h4>
                <h5>Stock: {{$produk->stok}} Unit</h5>
                <h5>Ketapang</h5>
                <h6>{{$produk->harga}}</h6>
             </div>
          </div>
         </a> 
      @endforeach

      <div class="">
        <div class="col-md-12">
          <div class="d-flex justify-content-center">
          {{$list_produk->links()}}
          </div>
        </div>
      </div>

  

    </div>
  </div>
</div>

<!-- footer -->

@include('section.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.13.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
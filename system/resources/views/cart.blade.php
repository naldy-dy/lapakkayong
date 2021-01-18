<!DOCTYPE html>
<html lang="en">
  <head>
<!-- end hiden navigasi -->
    <!-- Required meta tags -->
   

   @include('section.assets')


    <title>Lapak Kayong</title>
  </head>
  <body>
    <!-- header -->
    @include('section.header')

    <!-- end header -->
<!-- isi produk !-->
<div class="container" style="margin-top: 180px">


  <div class="row my-5">
      <div class="col-md-6 pb-3">
        
      </div>
      <div class="col-md-6">
        <div class="head-line">
          <div class="ml-3">
            Detail Produk
          </div>
        </div>
        <div class="detail-box shadow" style="width: 100%">
         <img class="img-fluid" src="{{url("public/$detail->foto")}}">
        </div>

        <table class="table">
          <tr>

            <td>Nama Penjual</td>
            <td>{{ucwords($detail->nama)}}</td>

          </tr>
          <tr>
            <td>Lokasi Produk</td>
            <td>{{ucwords($detail->no_handphone)}}</td>
          </tr>
          <tr>
            <td>Berat Produk</td>
            <td>{{$detail->berat}} Kg</td>
          </tr>
          <tr>
            <td>Jumlah Produk</td>
            <td> {{$detail->stok}} Unit</td>
          </tr>

          <tr>
            <td>Harga</td>
            <td style="color: red;font-weight: bold;">{{$detail->harga}}</td>
          </tr>
          <tr>
            <td>Jumlah Pesanan</td>
            <form action="" method="post">
               <td><input type="number" min="1" class="input-control" name="pesanan"></td>
            </form>
           
          </tr>
    
          <tr>
            <td><a href="" class="btn btn-danger shadow"><img src="{{url('public')}}/assets/icon/keranjang.png" width="20px"> Beli</a>
              <a href="" class="btn btn-success shadow" style="float: right;"><img src="{{url('public')}}/assets/icon/whatsapp.png" width="20px"> Beli Via WhatsApp</a>
            </td>
            <td>
              <td>
            </td>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="row">
    <div class="col-md-12 container my-3">
      <div class="card-header shadow">
        <div class="ml-3 pt-2 pb-2">
         <h3>Nama Toko :<a href="{{url('detail-user',$detail->seller->id)}}"> {{ucwords($detail->seller->nama)}} </a></h3>
        </div>
      </div>
    </div>
  </div>

      <div class="col-md-12 my-5">
        <div class="card shadow">
        <div class="card-body">
          <h1 class="my-3">Detail Produk</h1> <hr style="border: 2px solid #c70039;">
          {!!nl2br($detail->diskripsi)!!}
          </div>
        </div>
      </div>
  </div>


</div>

<!-- end isi produk -->
<!-- footer -->
    @include('section.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.13.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
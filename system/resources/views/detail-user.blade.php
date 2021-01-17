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
        <div class="detail-box shadow">
         <img src="{{url("public/$detail->foto")}}" width="50%">
        </div>
      </div>
      <div class="col-md-6">
        <h1>Nama Seller : {{ucwords($detail->nama)}}</h1>
        <h1>Email : {{ucwords($detail->email)}}</h1>
        <h1>No Handphone : {{ucwords($detail->detail->no_handphone)}}</h1>
        <h2>Bergabung Sejak {{$detail->created_at->format("d M Y")}}</h2>

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
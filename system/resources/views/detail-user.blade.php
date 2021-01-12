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


<div class="container-fluid">
  <div class="head-line my-2">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
          <h5>Produk Terbaru</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
<div class="container-fluid">
  <div class="row"> 
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Detail Toko
        </div>
        <div class="card-body">
          <table class="table">
              <tr>
                <th>Nama Toko</td>
                <td>:</td>
                <td>Jaya Sentosa</td>
              </tr>
              <tr>
                <th>Alamat</td>
                <td>:</td>
                <td>Sukadana</td>
              </tr>
              <tr>
                <th>Jumlah Produk</td>
                <td>:</td>
                <td>45 Unit</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-9 my-3">
     <a href=""> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="{{url('public')}}/assets/produk/2.jpeg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock:  Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. harga</h6>
         </div>
      </div>
     </a> 

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
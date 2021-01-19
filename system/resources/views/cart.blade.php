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
          <div class="row">
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-header">
          Alamat Pengiriman
        </div>
        <div class="card-body">
          <div class="row" style="width: 100%">
            <div class="col-md-12">
                <label>Nama Penerima</label>
                <input type="text" class="form-control" name="">
                <label>No Handpone</label>
                <input type="text" class="form-control" name="">
                  <label for="" class="control-label">Provinsi</label>
                  <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                    <option value="">Pilih Provinsi</option>  
                   @foreach($list_provinsi as $provinsi)
                    <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                   @endforeach 
                  </select>
                </div>
                <div class='col-md-12'>
                  <label for="" class="control-label">Kabupaten/Kota</label>
                  <select name="" class="form-control" id="kab" onchange="gantiKabupaten(this.value)" >
                    <option value="">Pilih Provinsi Terlebih Dahulu</option>
                  </select>
                </div>
                <div class='col-md-12'>
                  <label for="" class="control-label">Kecamatan</label>
                  <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)" >
                     <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                  </select>
                </div>
                <div class='col-md-12'>
                  <label for="" class="control-label">Desa</label>
                  <select name="" class="form-control" id="desa">
                     <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                  </select>
                </div>
                 <div class='col-md-12'>
                  <label for="" class="control-label">Kode POs</label>
                 <input type="text" name="" class="form-control" placeholder="Kode POS">
                </div>
                <div class='col-md-12'>
                  <label for="" class="control-label">Alamat Lengkap</label>
                 <textarea class="form-control"></textarea>
                </div>

          </div>
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
     <script src="{{url('public')}}/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{url('public')}}/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{url('public')}}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{url('public')}}/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="{{url('public')}}/assets/js/custom-scripts.js"></script>
    <!-- dataTabels -->
    <script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js/"></script>
    <script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.bootstrap4.min.js"></script>
    <!-- summernote -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @stack('script')
    <script>
        $(".table-datatable").DataTable();
    </script>
  </body>
</html>

@push('script')
   <script>
     function gantiProvinsi(id){
        $.get("api/provinsi/"+id, function(result){
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}</option>`;
          }
          $("#kab").html(option)
        });
     }

     function gantiKabupaten(id){
        $.get("api/kabupaten/"+id, function(result){
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}</option>`;
          }
          $("#kecamatan").html(option)
        });
     }

     function gantiKecamatan(id){
        $.get("api/kecamatan/"+id, function(result){
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}</option>`;
          }
          $("#desa").html(option)
        });
     }
   </script>
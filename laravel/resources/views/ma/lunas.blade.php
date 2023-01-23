@extends('layouts.master')


@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <!-- TABLE HOVER -->
          <div class="panel">
            <div class="panel-heading">

              <h1 class="panel-title"><b> Daftar Nama yang Lunas Registrasi Biaya Awal Masuk Jenjang MA </b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Lunas</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Waktu</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($ma_registrasi as $ma_registrasi)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $ma_registrasi->lunas}}  </td>
                      <td> {{ $ma_registrasi->jenjang}}  </td>
                      <td> {{ $ma_registrasi->nama}}  </td>
                      <td> {{ $ma_registrasi->fasilitas}}  </td>
                      <td> {{ $ma_registrasi->jenis_kelamin}}  </td>
                      <td> {{ $ma_registrasi->created_at}}  </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>



           </div>
         </div>
         <!-- END TABLE HOVER -->


       </div>
     </div>
   </div>
 </div>
</div>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif






  @endsection


  @section('footer')

  <script>
    $(document).ready(function(){

      $('#datatable').DataTable();

      $('.delete').click(function(){
        var smp1_id = $(this).attr('smp1-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+smp1_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp1') }}/"+smp1_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
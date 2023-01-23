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

              <h1 class="panel-title"><b> Daftar Nama yang Lunas Registrasi Biaya Awal Masuk Jenjang SMP 2 </b></h1>

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
                    @foreach($registrasi_smp2 as $registrasi_smp2)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $registrasi_smp2->lunas}}  </td>
                      <td> {{ $registrasi_smp2->jenjang}}  </td>
                      <td> {{ $registrasi_smp2->nama}}  </td>
                      <td> {{ $registrasi_smp2->fasilitas}}  </td>
                      <td> {{ $registrasi_smp2->jenis_kelamin}}  </td>
                      <td> {{ $registrasi_smp2->created_at}}  </td>
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
        var smp2_id = $(this).attr('smp2-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+smp2_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('smp2') }}/"+smp2_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
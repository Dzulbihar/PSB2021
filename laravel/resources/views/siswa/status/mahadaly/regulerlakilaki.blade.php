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

              <h1 class="panel-title"><b>Data Mahad Aly Reguler Laki-laki (Pendaftaran Online)</b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($siswa as $siswa)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $siswa->fasilitas}} </td>
                      <td> {{ $siswa->jenkel}} </td>
                      <td> {{ $siswa->created_at}} </td>
                      <td> {{ $siswa->status}} </td>
                      <td> {{ $siswa->namalengkap}} </td>
                      <td> {{ $siswa->desa}}, {{ $siswa->kec}}, {{ $siswa->kab}}, {{ $siswa->prov}} </td>
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
        var siswa_id = $(this).attr('siswa-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+siswa_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('siswa') }}/"+siswa_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
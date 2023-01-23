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

              <h1 class="panel-title"><b>Total Data Masuk Jenjang Mahad Aly (Pendaftaran Online)</b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Jenis Kelamin</th>
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
                      <td> {{ $siswa->status}} </td>
                      <td> {{ $siswa->created_at}} </td>
                      <td> {{ $siswa->fasilitas}} </td>
                      <td> {{ $siswa->jenkel}} </td>
                      <td> {{ $siswa->namalengkap}} </td>
                      <td> {{ $siswa->desa}}, {{ $siswa->kec}}, {{ $siswa->kab}}, {{ $siswa->prov}} </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

         </div>
         <!-- END TABLE HOVER -->


          <!-- TABLE HOVER -->
          <div class="panel">
            <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-hover" id="datatable">
                <thead>
                  <tr>
                    <th> 
                      <h3> 
                        <b> Data Detail Pendaftaran Online  </b>
                      </h3>
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <!-- ambil data di database-->
                  <td>
                      <a href="{{url('/siswa/mahadaly/lakilaki')}}" class="btn btn-danger btn-sm">Jumlah Laki-laki</a>
                      <a href="{{url('/siswa/mahadaly/perempuan')}}" class="btn btn-danger btn-sm">Jumlah Perempuan</a>
                      <hr>
                      <a href="{{url('/siswa/mahadaly/reguler')}}" class="btn btn-success btn-sm">Reguler</a>
                      <a href="{{url('/siswa/mahadaly/nonreguler')}}" class="btn btn-success btn-sm">Non Reguler</a>
                      <hr>
                      <a href="{{url('/siswa/mahadaly/regulerlk')}}" class="btn btn-warning btn-sm">Reguler Laki-laki</a>
                      <a href="{{url('/siswa/mahadaly/regulerpr')}}" class="btn btn-warning btn-sm">Reguler Perempuan</a>
                      <a href="{{url('/siswa/mahadaly/nonregulerlk')}}" class="btn btn-warning btn-sm">Non Reguler Laki-laki</a>
                      <a href="{{url('/siswa/mahadaly/nonregulerpr')}}" class="btn btn-warning btn-sm">Non Reguler Perempuan</a>
                  </td>
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
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

              <h1 class="panel-title"><b> Data Reguler Jenjang Mahad Aly </b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($mahadaly as $mahadaly)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $mahadaly->fasilitas}} </td>
                      <td> {{ $mahadaly->created_at}} </td>
                      <td> {{ $mahadaly->status}} </td>
                      <td> {{ $mahadaly->namalengkap}} </td>
                      <td> {{ $mahadaly->jenkel}} </td>
                      <td> {{ $mahadaly->desa}}, {{ $mahadaly->kec}}, {{ $mahadaly->kab}}, {{ $mahadaly->prov}} </td>
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
        var mahadaly_id = $(this).attr('mahadaly-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+mahadaly_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('mahadaly') }}/"+mahadaly_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
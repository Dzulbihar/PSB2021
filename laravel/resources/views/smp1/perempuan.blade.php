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

              <h1 class="panel-title"><b>Data Rincian Perempuan Jenjang SMP 1 </b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jenjang</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($smp1 as $smp1)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $smp1->jenkel}} </td>
                      <td> {{ $smp1->created_at}} </td>
                      <td> {{ $smp1->status}} </td>
                      <td> {{ $smp1->fasilitas}} </td>
                      <td> {{ $smp1->namalengkap}} </td>
                      <td> {{ $smp1->desa}}, {{ $smp1->kec}}, {{ $smp1->kab}}, {{ $smp1->prov}} </td>
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
        var ma_id = $(this).attr('ma-id');
        swal({
          title: "Yakin?",
          text: "Mau dihapus data SMP 2 kelas 9 dengan id "+ma_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('ma') }}/"+ma_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
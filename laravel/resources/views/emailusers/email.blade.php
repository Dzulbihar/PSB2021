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

              <h1 class="panel-title"><b> Data Pencarian Email </b></h1>

            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Hak Access</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Variabel php untuk nomor-->    <?php
                    $nomer = 1;
                    ?>
                    <!-- ambil data di database-->
                    @foreach($emailusers as $users)
                    <tr>
                      <th>{{ $nomer++}}</th>
                      <td> {{ $users->role}}  </td>
                      <td> {{ $users->name}}  </td>
                      <td> {{ $users->email}}  </td>
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
        var users_id = $(this).attr('users-id');
        swal({
          title: "Yakin?",
          text: "mau dihapus data SMP 2 kelas 9 dengan id "+users_id+" ??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          console.log(willDelete);
          if (willDelete) {
            window.location = "{{ url('users') }}/"+users_id+"/{{('delete')}}";
          }
        });
      });

    });

  </script>

  @stop
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
                  <h1 class="panel-title"><b>POSTS</b></h1>

                  <div class="right">
                    <a href="{{route('posts.add')}}" class="btn btn-danger btn-sm btn-primary" >Add new posts</a>
                  </div>

                </div>

                <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">USER</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>

                        <tbody>

                            @foreach($posts as $post)

                            <tr>
                              <th>{{ $post->id}}</th>
                              <th>{{ $post->title}}</th>
                              <th>{{ $post->user->name}}</th>
                              <td>
                                  <a target="_blank" href="{{route('site.single.post',$post->slug)}}" class="btn btn-info btn-sm">View</a>
                                  <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                  <a href="#" class="btn btn-danger btn-sm delete" siswa-id="#">Delete</a>
                              </td>
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
  $('.delete').click(function(){
    var siswa_id = $(this).attr('siswa-id');
    swal({
      title: "Yakin?",
      text: "Mau dihapus data Siswa dengan id "+siswa_id+" ??",
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
</script>

@stop
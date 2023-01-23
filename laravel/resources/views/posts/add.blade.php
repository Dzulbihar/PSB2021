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
              <h1 class="panel-title"><b>Add New Post</b></h1>
            </div>

            <div class="panel-body">

              <div class="row">

                <div class="col-md-8">
                  
                  <form action="{{route('posts.create')}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}

                      <div class="form-group{{$errors->has('title') ? 'has-error' : '' }}">
                        <label for="">Title</label>
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title">

                        @if($errors->has('title'))
                          <span class="help-block">
                            {{$errors->firs('title')}}
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">
                          Content
                        </label>
                        <textarea name="content" class="form-control" id="content">{{old('content')}}
                          
                        </textarea>                        
                      </div>               

                </div>

                <div class="col-md-4">

                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                  </div>
                  <img id="holder" style="margin-top:15px;max-height:100px;">

                  <div class="input-grup">
                      <input type="submit" class="btn btn-info pull-right" value="Submit">
                  </div>

                </div>

              </div>

                </form>

            </div>
          </div>
<!-- END TABLE HOVER -->


        </div>
      </div>
    </div>
  </div>
</div>



@endsection


@section('footer')

<!-- Fasilitas Thumbnail -->
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<!-- Fasilitas Font -->
  <script>
      ClassicEditor
          .create( document.querySelector( '#content' ) )
          .catch( error => {
              console.error( error );
          } );

// Fasilitas Thumbnail -->
      $(document).ready(function(){
          $('#lfm').filemanager('image');
      });
  </script>

@stop
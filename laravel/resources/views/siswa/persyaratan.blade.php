@extends('layouts.master')

@section('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">


			<div class="card">
				<div class="card-body">  
					<div class="row">
						<!-- kolom 1 -->                    
						<div class="col-md-2">
							<h2></h2><br><br>
							<img src="{{ url('images/aska.jpg')}}" width="100%">
						</div>
						<!-- --> 
						<!-- kolom 2 --> 
						<div class="col-md-10">
							<h2></h2>
							<h3> <b> Persyaratan Jenjang {{ ($siswa->status) }} </b> </h3>
							<table class="table table-striped">
								<body>

									<tr>
										<td> Nama Lengkap </td>
										<td> : </td>
										<td>
											{{ ($siswa->namalengkap) }}
										</td>
									</tr>                                    

									<tr>
										<td> Alamat </td>
										<td> : </td>
										<td>
											{{ ($siswa->desa) }}, {{ ($siswa->kec) }}, {{ ($siswa->kab) }}
										</td>
									</tr>

									<tr>
										<td>Upload Persyaratan</td>
										<td></td>
										<td>
											<!--MASUKAN awal-->
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persyaratan">
												Upload
											</button>

										</td>
									</tr>

								</body>
							</table>
						</div>
						<!--  -->                
					</div>  
				</div>
			</div>

			<br><br>

			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title"> <b> Data Persyaratan {{ ($siswa->namalengkap) }} </b> </h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th> Persyaratan </th>
								<th> Akta Kelahiran </th>
								<th> Kartu Keluarga </th>
								<th> Foto Ukuran 4:3 </th>
								<th> Aksi </th>

							</tr>
						</thead>
						<tbody>
							@foreach($siswa->persyaratan as $persyaratan)
							<tr>
								<td> {{$persyaratan->syarat}} </td>
								<td> <img src="{{asset('images/'.$persyaratan->pivot->akte)}}" width="100%"> </td>
								<td> <img src="{{asset('images/'.$persyaratan->pivot->kk)}}" width="100%"> </td>
								<td> <img src="{{asset('images/'.$persyaratan->pivot->foto)}}" width="100%"> </td>
								<td><a href="{{ url('siswa') }}/{{$siswa->id}}/{{$persyaratan->id}}/{{'deletepersyaratan'}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>



		</div>
	</div>
</div>


<!-- Masukan Data Persyaratan -->
<div class="modal fade" id="persyaratan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h class="modal-title" id="exampleModalLabel">Masukan Data Persyaratan</h>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">

				<form action="{{url('siswa')}}/{{$siswa->id}}/addsyarat"  method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!-- persyaratan -->
					<div class="form-group">
						<label for="persyaratan"> Persyaratan </label>
						<select class="form-control" id="persyaratan" name="persyaratan">
							@foreach($awal as $ua)
							<option value="{{$ua->id}}">{{$ua->syarat}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="akte"> Masukan Akta Kelahiran </label>
						<input name="akte" type="file" class="form-control" id="akte" aria-describedby="emailHelp" value="{{old('akte')}}">
					</div>

					<div class="form-group">
						<label for="kk"> Masukan Kartu Keluarga </label>
						<input name="kk" type="file" class="form-control" id="kk" aria-describedby="emailHelp" value="{{old('kk')}}">
					</div>

					<div class="form-group">
						<label for="foto"> Masukan Foto 4:3 </label>
						<input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp" value="{{old('foto')}}">
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>

			</form>

		</div>
	</div>
</div>

@endsection
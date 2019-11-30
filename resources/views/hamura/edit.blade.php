@extends('layouts.layout')


@section('content')
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<h3 class="page-title">Tables</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Inputs</h3>
							</div>
							<div class="panel-body">
								<form action="/hamura/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
						        	{{ csrf_field() }}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Judul Film</label>
								   <input type="text" name="judul_film" class="form-control" value="{{$data->judul_film}}">
								  </div>
								   <div class="form-group">
								    <label for="exampleInputEmail1">Sinopsis</label>
								    <input type="text" name="sinopsis" class="form-control" value="{{ $data->sinopsis }}">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Tahun Release</label>
								    <input type="date" class="form-control" name="tahun_release" value="{{ $data->tahun_release}}">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Description</label>
								    <input type="text" class="form-control" name="description" value="{{ $data->description}}">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputEmail1">Avatar</label>
								    <input type="file" class="form-control" name="avatar" value="{{ $data->avatar}}">
								  </div>
								  	<button type="submit" class="btn btn-warning">Update</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('content2')
	<h1>Edit Film</h1>
	@if(session('success'))
		<div class="alert alert-success" role="alert">
		  {{ session('success') }}
		</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
			<form action="/hamura/{{$data->id}}/update" method="POST">
	        	{{ csrf_field() }}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Judul Film</label>
			   <input type="text" name="judul_film" class="form-control" value="{{$data->judul_film}}">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Sinopsis</label>
			    <input type="text" name="sinopsis" class="form-control" value="{{ $data->sinopsis }}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tahun Release</label>
			    <input type="date" class="form-control" name="tahun_release" value="{{ $data->tahun_release}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Description</label>
			    <input type="text" class="form-control" name="description" value="{{ $data->description}}">
			  </div>
				<button type="submit" class="btn btn-warning">Update</button>
			</form>
		</div>
	</div>
@endsection
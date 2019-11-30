@extends('layouts.layout')

@section('content')
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<h3 class="page-title">Tables</h3>
				<div class="row">
					<div class="col-md-12">
						<!-- BASIC TABLE -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Film</h3>
								<div class="right">
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
									  <i class="lnr lnr-plus-circle"></i>
									</button>
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>JUDUL FILM</th>
											<th>SINOPSIS</th>
											<th>TAHUN RELEASE</th>
											<th>DESCRIPTION</th>
											<th>AVATAR</th>
											<th>LINK</th>
											<th>ACTION0</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data_film as $data)
										<tr>
											<td>{{ $data->judul_film }}</td>
											<td>{{ $data->sinopsis }}</td>
											<td>{{ $data->tahun_release }}</td>
											<td>{{ $data->description }}</td>
											<td><img src="{{asset('images/'.$data->avatar)}}" style="height:50px; width:50px; cursor:pointer"></td>
											<td>{{ $data->link }}</td>
											<td><a href="/hamura/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
											<td><a href="/hamura/{{$data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan dihapus ?')">Delete</a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<!-- END BASIC TABLE -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>

	@if(session('success'))
		<div class="alert alert-success" role="alert">
		  {{ session('success') }}
		</div>
	@endif
	<div class="row">
		<div class="col-md-6">
			<h1>Data Film</h1>
		</div>
		<div class="col-md-6">
			<!-- Button trigger modal -->
			
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Film</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="/hamura/create" method="POST">
		        	{{ csrf_field() }}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Judul Film</label>
				   <input type="text" name="judul_film" class="form-control" placeholder="Judul Film">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Sinopsis</label>
				    <input type="text" name="sinopsis" class="form-control" placeholder="Sinopsis">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tahun Release</label>
				    <input type="date" class="form-control" name="tahun_release" id="datepicker" aria-describedby="Tahun Release">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Description</label>
				    <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="Description" placeholder="Description">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Avatar</label>
				    <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" aria-describedby="Avatar" placeholder="Avatar">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Link</label>
				    <input type="text" class="form-control" name="link" id="exampleInputEmail1" aria-describedby="link" placeholder="Link">
				  </div>
				  <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
			      </div>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection

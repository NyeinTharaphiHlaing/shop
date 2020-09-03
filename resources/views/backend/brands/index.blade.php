@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-brands-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand List</h1>
	</div>
	<div class="row">
		<div class="col-md-10">
			<a href="{{route('brands.create')}}" class="btn btn-info float-right">Add New</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="thead-inverse btn-dark">
				<tr>
					<th>No</th>
					<th>Brand Name</th>
					<th>Actions</th>
				</thead>
				<tbody>
					@foreach($brands as $brand)
					@php $i=1;@endphp
					<td>{{$i++}}</td>
					<td>{{$brand->name}}</td>
					<td>
						<a href="#" class="btn btn-info">Detail</a>
						<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-success">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach	
			</tbody>

		</table>
	</div>
</div>
@endsection
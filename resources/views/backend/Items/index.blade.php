@extends('backendtemplate')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1 class="h3 mb-0 text-gray-800">Item List</h1>
	</div>
	<div class="container-fluid">

	<div class="col-md-12">
			<a href="{{route('items.create')}}" class="btn btn-primary float-right">Add New</a>
			
		</div>
</div>
<div class="col-md-12">
<div class="container-fluid">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Codeno</th>
				<th>Name</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($items as $item)
			<tr>
			<td>{{$i++}}</td>
			<td>{{$item->codeno}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}MMK</td>
			<td><a href="" class="btn btn-primary ">Details</a>
			<a href="{{route('items.edit',$item->id)}}" class="btn btn-primary ">Edit</a>
			<a href="" class="btn btn-primary ">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>	
</div>
@endsection
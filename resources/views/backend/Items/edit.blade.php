@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
	</div>
	<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">

	@csrf
	@method	('PUT')
	<input type="hidden" name="oldphoto" value="{{$item->photo}}">
	<div class="form-group row">
		<label for="code" class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="code" name="codeno" value="{{$item->codeno}}">
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
		</div>
	</div>
	<div class="form-group row">
		<label for="file" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
			<input type="file" class="form-control-file" id="file" name="photo" value="">
			<img src="{{asset($item->photo)}}" class="w-50">
		</div>
	</div>
	<div class="form-group row">
		<label for="price" class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
			<input type="number" class="form-control" id="price" name="price" value="{{$item->price}}">
		</div>
	</div>
	<div class="form-group row">
		<label for="discount" class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-6">
			<input type="number" class="form-control" id="discount" name="discount" value="{{$item->discount}}">
		</div>
	</div>
	<div class="form-group row">
		<label for="textareal" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
			<textarea class="form-control" id="textareal" rows="3" name="description"  >{{$item->description}}</textarea>

		</div>

	</div>
	<div class="form-group row ">
		<select class="form-control-md" id="inputBrand" name="brand">
			<optgroup label="Choose Brand">
				@foreach($brands as $brand)
				<option value="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach
			</optgroup>
		</select>
		<span class="text-danger">{{$errors->first('brand')}}</span>

	
		<select class="form-control-md" id="inputSubcategory" name="subcategory">
			<optgroup label="Choose subcategory">
				@foreach($subcategories as $subcategory)
				<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
				@endforeach
			</optgroup>
		</select>
		<span class="text-danger">{{$errors->first('subcategory')}}</span>
	</div>
	<div>
		<div class="col-sm-6">

			<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
		</div>
	</div>


</form>
</div>

@endsection
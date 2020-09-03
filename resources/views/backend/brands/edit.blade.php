@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1>
	</div>
</div>
<form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">

	@csrf	
	@method('PUT')
	
	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="file" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-8">
			<input type="file" class="form-control-file" id="photo" name="photo">
			<img src="{{asset($brand->photo)}}" class="img-fluid w-25">
			<input type="hidden" name="oldphoto" name="photo" value="{{$brand->photo}}">
			{{-- <span class="text-danger">{{$error->first('photo')}}</span> --}}
		</div>
	</div>
	
	<div>
		<div class="col-sm-6">

			<input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
		</div>
	</div>


</form>
@endsection
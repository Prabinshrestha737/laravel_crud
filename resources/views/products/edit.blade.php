@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Edit Product </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.index') }}"> Back to Product List </a>
			</div>
		</div>
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Oopps! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ route('products.update', $product->id) }}" method="POST">
		@csrf
		@method("PUT")
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Detail:</strong>
					<textarea name="detail" placeholder="Detail" class="form-control">{{ $product->detail }}</textarea>
				</div>
			</div>

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
@endsection
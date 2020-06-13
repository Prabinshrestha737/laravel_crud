@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Add New Product </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.index') }}"> Back to Products </a>
			</div>
		</div>
	</div>

	<!-- @if($errors->any())
		<div class="alert alert-danger">
			<strong>Oopps! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif -->

	{{ Form::open(array('action' => 'ProductController@store')) }}

		Name: <input type='text' name='name'> <br>
		Details: <input type='text' name='details'> <br>
		Price: <input type='text' name='price'> <br>

		<button type='submit' name='Submit'>Submit</button>

	{{ Form::close() }}
@endsection
@extends('layouts.main')
@section('title', 'Cars / Edit')
@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<form method="POST" class="col-4">

				@csrf

				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" value="{{$car->name}}">
					@error('name')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Model</label>
					<input type="text" class="form-control" name="model" value="{{$car->model}}">
					@error('model')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Power</label>
					<input type="text" class="form-control" name="power" value="{{$car->power}}">
					@error('power')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Km</label>
					<input type="text" class="form-control" name="km" value="{{$car->km}}">
					@error('km')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Price</label>
					<input type="text" class="form-control" name="price" value="{{$car->price}}">
					@error('price')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div class="form-group">
					<label for="">Year</label>
					<input type="text" class="form-control" name="year" value="{{$car->year}}">
					@error('year')
					       	<span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
					@enderror
				</div>
				<div>
					<input type="submit" class="btn btn-danger" value="Update">
				</div>
			</form>
		</div>
	</div>
@endsection
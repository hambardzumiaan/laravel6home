@extends('layouts.main')
@section('title', 'Cars')
@section('content')

	<div class="container">
		<a href="/cars/create">New</a>

		<table class="table">
		  <ul>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Model</th>
		      <th scope="col">Power</th>
		      <th scope="col">Km</th>
		      <th scope="col">Price</th>
		      <th scope="col">Year</th>
		      <th scope="col">Action</th>
		    </tr>
		  </ul>
	  		@foreach($cars as $key => $car)

		    <tr>
	    		<td>{{ $key + 1 }}</td>
	    		<td>{{ $car->name }}</td>
	    		<td>{{ $car->model }}</td>
	    		<td>{{ $car->power }}</td>
	    		<td>{{ $car->km }}</td>
	    		<td>{{ $car->price }}</td>
	    		<td>{{ $car->year }}</td>
	    		<td class="row">
	    			<a href="/cars/edit/{{ $car->id }}" class="btn btn-warning mr-2">Edit</a>
	    			<form action="/cars/destroy/{{ $car->id }}" method="POST">
	    				@csrf
	    				<button type="submit" class="btn btn-danger mr-2">DELETE</button>
	    			</form>
	    		</td>
		    </tr>

	    	@endforeach	

		 
		</table>
	</div>
@endsection
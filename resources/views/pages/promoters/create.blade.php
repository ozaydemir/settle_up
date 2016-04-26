@inject('countries', 'App\Http\Utilities\Country')

@extends('layouts.sidebar')

@section('content')

	<h1>Add Promoter</h1>

	<form method="POST" action="{{ URL::to('promoters/store/') }}">
		
		<div class="form-group">
			<label for="promoter-name">Promoter Name</label>
			<input type="text" name="promoter-name" id="promoter-name" class="form-control" value {{old('promoter-name')}}/>
		</div>

		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="text" name="email" id="email" class="form-control" value {{old('email')}}/>
		</div>

		<div class="form-group">
			<label for="cell-phone">Cell Phone</label>
			<input type="text" name="cell-phone" id="cell-phone" class="form-control" value {{old('cell-phone')}}/>
		</div>

		<div class="form-group">
			<label for="alt-phone">Alternative Phone</label>
			<input type="text" name="alt-phone" id="alt-phone" class="form-control" value {{old('alt-phone')}}/>
		</div>

		<div class="form-group">
			<label for="notes">Notes</label>
			<input type="text" name="notes" id="notes" class="form-control" value {{old('notes')}}/>
		</div>

		<div class="form-group">
			<label for="country">Country</label>
			<select id="country" name="country" class="form-control">
				@foreach($countries::all() as $name => $country)
					<option value="{{ $country }}">{{ $name }}</option>
				@endforeach
			</select>
		</div>

		<button type="submit">Submit</button>

	</form>

@stop
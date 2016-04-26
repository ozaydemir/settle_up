@extends('layouts.sidebar')

@section('content')

	<h1>Add Show</h1>

	<form>
		
		<div class="form-group">
			<label for="show-name">Show Name</label>
			<input type="text" name="show-name" id="show-name" class="form-control" value {{old('show-name')}}/>
		</div>

		<div class="form-group">
			<label for="date">Show Date</label>
			<input type="text" name="date" id="date" class="form-control" value {{old('date')}}/>
		</div>

		<div class="form-group">
			<label for="honorarium">Honorarium</label>
			<input type="text" name="honorarium" id="honorarium" class="form-control" value {{old('honorarium')}}/>
		</div>

		<div class="form-group">
			<label for="attendance">Attendance</label>
			<input type="text" name="attendance" id="attendance" class="form-control" value {{old('attendance')}}/>
		</div>

	</form>

@stop
@extends('layouts.sidebar')

@section('content')

	<h1>Promoters</h1>

	<div class="toolbar-container">
		<div class="filter-container">
			<a href="#" class="filter-link active">Promoters</a>
		</div>
		<div class="action-tools-container">
			<a href="#" class="new-button">New Promoter</a>
			<form>
				<input type="search" class="search-input" placeholder="Search..."/>
				<button class="search-btn">Search</button>
			</form>
		</div>
	</div>

	<div class="data-grid-container">
		<table class="data-grid">
			<thead>
				<tr>
					<th>Promoter Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Alt Phone</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($promoters as $promoter)
					<tr>
						<td>{{$promoter->promoter_name}}</td>
						<td>{{$promoter->promoter_email}}</td>
						<td>{{$promoter->promoter_phone}}</td>
						<td>{{$promoter->promoter_phone_alt}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	{!! $promoters->render() !!}

@stop
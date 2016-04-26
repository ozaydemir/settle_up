@extends('layouts.sidebar')

@section('content')

<div class="toolbar-container">
	<div class="filter-container">
		<a href="#" class="filter-link active">Shows</a>
		<a href="#" class="filter-link">Past Shows</a>
	</div>
	<div class="action-tools-container">
		<a href="#" class="new-button">New Show</a>
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
				<th>Date</th>
				<th>Venue</th>
				<th>City</th>
				<th>Promoter</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>06/23/15</td>
				<td>Music Farm</td>
				<td>Charleston, SC</td>
				<td>Mike Evans</td>
			</tr>
			<tr>
				<td>06/24/15</td>
				<td>Rocketown</td>
				<td>Nashville, TN</td>
				<td>Jim Caldwell</td>
			</tr>
			<tr>
				<td>06/25/15</td>
				<td>Newport Music Hall</td>
				<td>Columbus, OH</td>
				<td>Dallas Green</td>
			</tr>
		</tbody>
	</table>
</div>

@stop
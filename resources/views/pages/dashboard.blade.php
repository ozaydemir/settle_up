@extends('layouts.sidebar')

@section('content')

<h1>Hello Moon!</h1>

<?php var_dump(Auth::user()->id)?>

@stop
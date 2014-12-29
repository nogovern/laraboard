
@extends('layout')

@section('content')
	<style>
		.list-group {margin:0;}
	</style>
	
	<div class="container">
		<div class="page-title">
			<h2>게시판? <small>결과수: {{ $rows->count() }}</small></h2>
		</div>

		<div class="row">
			<div class="col-sm-6">
			@foreach($rows as $row)
				<div class="list-group">
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">{{ $row->title }}</h4>
						<p class="list-group-item-text">{{ $row->content }}</p>
					</a>
				</div>
			@endforeach
			</div>
		</div>
	<div class="container">
@stop
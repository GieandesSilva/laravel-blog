@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading"> 
			Update a Tag
		</div>
		<div class="panel-body">
			
			<form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
				
				{{ csrf_field() }}

				<div class="form-group">			
					<label for="name">Tag Title</label>
					<input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">	
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success" type="submit"> Update tag </button>
				</div>
			</form>

		</div>
	</div>


@stop
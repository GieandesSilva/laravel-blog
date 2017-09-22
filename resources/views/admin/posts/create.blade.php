@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading"> 
			Create a New Post
		</div>
		<div class="panel-body">
			
			<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="form-group">			
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="featured">Feature Image</label>
					<input type="file" name="featured" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="content">Content</label>
					<textarea name="content" class="form-control" rows="10"></textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success" type="submit"> Store Post </button>
				</div>
			</form>

		</div>
	</div>


@stop
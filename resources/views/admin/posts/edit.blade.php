@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading"> 
			Edit Post: {{ $post->title }}
		</div>
		<div class="panel-body">
			
			<form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="form-group">			
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" value="{{ $post->title }}">	
				</div>
				<div class="form-group">			
					<label for="featured">Feature Image</label>
					<input type="file" name="featured" class="form-control" value="{{ $post->featured }}">	
				</div>
				<div class="form-group">
					<label for="category">Select a Category: </label>
					<select name="category_id" id="category" class="form-control">

						@foreach($categories as $category)

							<option value="{{ $category->id }}"

								@if($post->category_id == $category->id)

									selected

								@endif

							> {{ $category->name }} </option>

						@endforeach

					</select>
				</div>
				<div class="form-group">

					<label> Selct Tags </label>
					@foreach($tags as $tag)
						<div class="checkbox">
							<label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"

								@foreach($post->tags as $t)

									@if($tag->id == $t->id)

										checked

									@endif

								@endforeach

							>{{ $tag->tag }}</label>
						</div>
					@endforeach
					
				</div>
				<div class="form-group">			
					<label for="content">Content</label>
					<textarea name="content" class="form-control" rows="10"> {{ $post->content }}</textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success" type="submit"> Update Post </button>
				</div>
			</form>

		</div>
	</div>


@stop
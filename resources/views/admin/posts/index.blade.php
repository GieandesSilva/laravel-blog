@extends('layouts.app')


@section('content')

	<div class="panel panel-default">		
		<div class="panel-heading">
			All Published Posts
		</div>	
		<div class="panel-body">
			
			<table class="table table-hover">

				<thead class="thead-inverse">	
					<tr>
						<th>Image</th>			
						<th>Title</th>
						<th>Editing</th>			
						<th>Trash</th>					
					</tr>
				</thead>		

				<tbody>
				@if($posts->count() > 0)

					@foreach($posts as $post)
						<tr>
							<td> <img src=" {{ $post->featured }} " alt=" {{ $post->title }} " height="100px"></td>
							<td>{{ $post->title}}</td>
							<td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info btn-xs">Edit</a></td>
							<td><a href="{{ route('post.delete',['id'=>$post->id])}}" class="btn btn-danger btn-xs">Trash</a></td>
						</tr>			
					@endforeach

				@else

					<tr>
						<td colspan="5" class="text-center"> No Published Posts</td>
					</tr>

				@endif
				</tbody>

			</table>

		</div>
	</div>

@stop
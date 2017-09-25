@extends('layouts.app')


@section('content')

	<div class="panel panel-default">		
		<div class="panel-heading">
			All Trasheds Posts
		</div>	
		<div class="panel-body">
			
			<table class="table table-hover">

				<thead class="thead-inverse">	
					<tr>
						<th>Image</th>			
						<th>Title</th>
						<th>Trash</th>
						<th>Delete</th>
					</tr>
				</thead>		

				<tbody>
					@if($posts->count() > 0)

						@foreach($posts as $post)
							<tr>
								<td> <img src=" {{ $post->featured }} " alt=" {{ $post->title }} " height="100px"></td>
								<td>{{ $post->title}}</td>
								<td><a href="{{ route('post.restore',['id'=>$post->id])}}" class="btn btn-success btn-xs">Restore</a></td>
								<td><a href="{{ route('post.kill',['id'=>$post->id])}}" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>			
						@endforeach

					@else

						<tr>
							<td colspan="5" class="text-center"> No Trashed Posts</td>
						</tr>

					@endif
				</tbody>

			</table>

		</div>
	</div>

@stop
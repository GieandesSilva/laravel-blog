@extends('layouts.app')


@section('content')

	<div class="panel panel-default">		
		<div class="panel-body">
			
			<table class="table table-hover">

				<thead class="thead-inverse">	
					<tr>
						<th>Category Name</th>			
						<th>Editing</th>			
						<th>Deleting</th>							
					</tr>
				</thead>		

				<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td><a href="">Editing</a></td>
						<td><a href="">Deleting</a></td>
					</tr>			
				@endforeach
				</tbody>

			</table>

		</div>
	</div>

@stop
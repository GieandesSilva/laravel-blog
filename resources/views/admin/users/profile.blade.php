@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading"> 
			Update the User: {{ $user->name }}
		</div>
		<div class="panel-body">
			
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="form-group">			
					<label for="name">User Name</label>
					<input type="text" name="name" value="{{ $user->name }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="email">User E-mail</label>
					<input type="email" name="email" value="{{ $user->email }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="password">User Password</label>
					<input type="password" name="password" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="avatar">User Avatar</label>
					<input type="file" name="avatar" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="facebook">Facebook Profile</label>
					<input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="linkedin">Linkedin Profile</label>
					<input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" class="form-control">	
				</div>
				<div class="form-group">
					<label for="about">About You:</label>
					<textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success" type="submit"> Update User </button>
				</div>
			</form>

		</div>
	</div>

@stop
@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="panel panel-default">
		
		<div class="panel-heading"> 
			Edit Settings Blog
		</div>
		<div class="panel-body">
			
			<form action="{{ route('settings.update') }}" method="post">
				
				{{ csrf_field() }}

				<div class="form-group">			
					<label for="site_name">Title Blog</label>
					<input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="address">Contact E-mail</label>
					<input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="address">Contact Number</label>
					<input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">	
				</div>
				<div class="form-group">			
					<label for="address">Address</label>
					<input type="text" name="address" value="{{ $settings->address }}" class="form-control">	
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success" type="submit"> Update Settings </button>
				</div>
			</form>

		</div>
	</div>

@stop
@extends('layout.main')

@section('content')


	<form action="{{ URL::route('account-create-post') }}" method="post">
		<div class="field">	
			Email: <input type="text" name="email" {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
		<div class="field">	
			Username: <input type="text" name="username" {{ (Input::old('username')) ? ' value="' . Input::old('username') . '"' : '' }}>
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
		</div>
		<div class="field">	
			Password: <input type="password" name="password">
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
		</div>
		<div class="field">	
			Password again: <input type="password" name="password_again">
			@if($errors->has('password_again'))
				{{ $errors->first('password_again') }}
			@endif
		</div>
		<input type="submit" value="Create Account">

		{{ Form::token() }}
	</form>
@stop
@if(count($errors) > 0)
	@foreach($errors -> all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		<strong>Successfully!</strong> {{session('success')}}
	</div>
@endif
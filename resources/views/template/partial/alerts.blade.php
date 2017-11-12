@if (Session::has('info'))
	<div class="alert alert-info" role="alert" style="width:800px">
		{{Session::get('info') }}
	</div>

@endif
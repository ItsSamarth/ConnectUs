@extends('template.default')

@section('content')
	<div class="row">
		<div class="col-lg-6">
			<h4>Your Friends</h4><!-- List of Friends -->
			@if(!$friends->count())
			<p> You have no friends.</p>
		@else
			@foreach($friends as $user)
				@include('user/partials/userblock')
			@endforeach
		@endif
		</div>

		<div class="col-lg-6">
			<h4>Your Friend Requests</h4><!-- List of Friend Requests -->
			@if (!$requests->count())
				<p>You have no Friend Requests.</p>

			@else
				@foreach($requests as $user)
					@include('user.partials.userblock')
				@endforeach

			@endif


		</div>
	</div>	

@stop

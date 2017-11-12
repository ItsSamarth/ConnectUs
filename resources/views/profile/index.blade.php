@extends('template.default')

@section('content')
<div class="row">
	<div class="col-lg-5">
		<!-- User information and statuses -->

		@include('user.partials.userblock')
		<hr>
	</div>
	<div class="col-lg-4 col-lg-offset-3">
		<!-- Friends, friend requests -->
		@if (Auth::user()->hasFriendRequestPending($user))
			<p>Waiting for {{ $user->getNameOrUsername() }} to accept your request.</p>
		@elseif (Auth::user()->hasFriendRequestRecieved($user))
			<a href="{{ Route('friend.accept', ['username' => $user->username])}}" class="btn btn-primary">Accept Friend Request</a>
		@elseif (Auth::user()->isFriendsWith($user))
			<p>You and {{ $user->getNameOrUsername() }} are friends.</p>

		@else
			<a href="{{ route('friend.add', ['username' => $user->username]) }}" class="btn btn-primary">Add as a Friend</a>
		@endif

		<h4>{{ $user->getNameOrUsername() }}'s friends.</h4>

		@if (!$user->friends()->count())
			<p> {{ $user->getNameOrUsername() }} has no friends.</p>
		@else
			@foreach ($user->friends() as $user)
				@include('user/partials/userblock')
			@endforeach
		@endif
	</div>
</div>

@stop
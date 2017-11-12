@extends('template.default')


@section('content')


	<!-- <div class="row"> -->
		

	

			<!-- <div class="col-xs-12 col-md-6 col-lg-4 item"  >
                <div class="timeline-block" style="background-color:white;">
                  <div class="panel panel-default share clearfix-xs">
                    <div class="panel-heading panel-heading-gray title">
                      What´s new
                    </div>
                    <form role="form" action="{{ route('status.post') }}" method="post">
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <div class="panel-body">
                      <textarea placeholder="What's up {{ Auth::user()->getNameorUsername() }}?" name="status" class="form-control" rows="3" class="form-control share-text"></textarea>
                      @if ($errors->has('status'))
						<span class="help-block">{{ $errors->first('status') }}</span>
					@endif
					<br>
                    </div>
                    <div class="panel-footer share-buttons" >
                      <a href="#"><i class="fa fa-map-marker"></i></a>
                      <a href="#"><i class="fa fa-photo"></i></a>
                      <a href="#"><i class="fa fa-video-camera"></i></a>
                      <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                    </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                  </div>
                </div>
              </div> -->


		<div class="col-lg-6">
			 <form role="form" action="{{ route('status.post') }}" method="post">
				<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
					<textarea placeholder="What's up {{ Auth::user()->getNameorUsername() }}?" name="status" class="form-control" rows="2"></textarea>
					@if ($errors->has('status'))
						<span class="help-block">{{ $errors->first('status') }}</span>
					@endif
					<br>
					<button type="submit" class="btn btn-info">Update Status</button>
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
			 <hr>
		</div>
	<!-- </div> -->

	<div class="row" >
		<div class="col-lg-5" style="background-color:white; width:650px" >
		<br>
			<!-- Timeline status and replies -->
			@if (!$statuses->count())
			<p>There's nothing in your timeline, yet.</p>
			@else
				@foreach ($statuses as $status)
						<!-- 			<div class="media" >
				    <div class="panel-heading panel-heading-gray title" style="background:#26a69a">
                      What´s new
 -->
					<br><br>
                    <a class="pull-left"  href="{{ route('profile.index', ['username' => $status->user->username]) }}" >
                    

				        <!-- <img class="media-object" alt="{{ $status->user->getNameOrUsername() }}" src="{{ $status->user->getAvatarUrl() }}"> -->
				        
				        <img class="media-object" alt="" src="../Avatars/default.jpg" style="width:100px; height:100px;" >
				       
				    </a>
				    	


					      


				    <div class="media-body" style="width:650px; color:black">
				        <h4 class="media-heading" >&nbsp&nbsp&nbsp&nbsp<a href="{{ route('profile.index', ['username' => $status->user->username]) }}" style="color:black">{{ $status->user->getNameOrUsername() }}</a></h4>
				        <p style ="padding-left:1.8em">{{ $status->body }}</p>
				        <ul class="list-inline" style ="padding-left:1.8em">
				            <li>{{ $status->created_at->diffForHumans() }}</li>
				            <li><a href="#">Like</a></li>
				            <li>10 likes</li>
				        </ul>

				        <!-- <div class="media">
				            <a class="pull-left" href="#">
				                <img class="media-object" alt="" src="">
				            </a>
				            <div class="media-body">
				                <h5 class="media-heading"><a href="#">Billy</a></h5>
				                <p>Yes, it is lovely!</p>
				                <ul class="list-inline">
				                    <li>8 minutes ago.</li>
				                    <li><a href="#">Like</a></li>
				                    <li>4 likes</li>
				                </ul>
				            </div>
				        </div> -->

				         <form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
				            <div class="form-group{{ $errors->has("reply-{$status->id}") ? ' has-error': '' }}">
				                <textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="Reply to this status"></textarea>

				                @if ($errors->has("reply-{$status->id}"))
				                		<span class="help-block">
				                			{{ $errors->first("reply-{$status->id}")}}
				                		</span>

				                @endif
				            </div>
				            <input type="submit" value="Reply" class="btn btn-default btn-sm">

				            <input type="hidden" name="_token" value="{{ Session::token() }}">
				          
					    
				        </form>
				    
				</div>
				@endforeach
				{!! $statuses->render() !!}
			@endif
		</div>
	</div>
@stop

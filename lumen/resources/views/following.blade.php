@extends('master')

@section('title')
Following
@endsection
@section('content')
	<div class="btn-list">
		<div class="btn">
			<a href="{{url('home')}}"> All user </a>
		</div>
		<div class="btn-active">
			<a href="{{url('following')}}"> Following </a>
		</div>
		<div class="btn">
			<a href="{{url('follower')}}"> Follower </a>
		</div>
	</div>
	<div class="user-container">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>You are Following</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		<div>
			<ul class="user-list">
				<li class="user_1">A</li>
				<li class="user_1">B</li>
				<li class="user_1">C</li>
				<li class="user_1">D</li>
				
			</ul>
		</div>
	</div>
</body>
</html>
@endsection
@extends('master')

@section('title')
User Information
@endsection
@section('btn')
<div class="btn">
	<a href="{{url('/')}}"> View User</a>
</div>
<div class="btn">
	<a href="{{url('/add')}}"> Add User </a>
</div>
@endsection
@section('content')
	<div class="login">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>Info User</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		
		<div class="detail">
			<h3> Nama : {{$user->name}} </h3>
			<h3> Alamat : {{$user->address}} </h3>
			<h3> Email : {{$user->email}} </h3>
			<h3> Situs : {{$user->site}} </h3>
			<h3> No Telp : {{$user->phone}} </h3>
		</div>


	</div>
</body>
</html>
@endsection
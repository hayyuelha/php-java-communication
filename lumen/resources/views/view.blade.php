@extends('master')

@section('title')
View User
@endsection
@section('btn')
<div class="btn-active">
	<a href="{{url('/')}}"> View User</a>
</div>
<div class="btn">
	<a href="{{url('/add')}}"> Add User </a>
</div>
@endsection
@section('content')
<!--/start-login-one-->
	<div class="login">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>View</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		<form role="form" method="POST" action="{{url('/view')}}">
			<ul>
				<li>
					<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
				</li>
				 <li>
					<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</li>
			</ul>

		
			<div class="submit">
				<input type="submit" value="View" >
			</div>
		</form>
	</div>
</body>
</html>
@endsection
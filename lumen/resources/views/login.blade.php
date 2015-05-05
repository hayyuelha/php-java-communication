@extends('master')

@section('title')
Login
@endsection
@section('content')
<!--/start-login-one-->
	<div class="login">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>User Login</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		<form>
			<ul>
				<li>
					<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" ><a href="#" class=" icon user"></a>
				</li>
				 <li>
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
				</li>
			</ul>

		</form>
		<div class="submit">
			<input type="submit" onclick="myFunction()" value="Log in" >
		</div>
		<div class="submit">
			<input type="submit" onclick="{{url('register')}}" value="Register">
		</div>
	</div>
</body>
</html>
@endsection
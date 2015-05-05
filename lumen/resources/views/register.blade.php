@extends('master')

@section('title')
Register
@endsection
@section('content')
	<div class="login">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>Register</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		<form>
			<ul>
				<li>
					<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="text" class="text" value="Nama Lengkap" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="text" class="text" value="Alamat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="text" class="text" value="Situs" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="text" class="text" value="Nomor Telepon" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
				</li>
				<li>
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</li>
			</ul>

		</form>
		<div class="submit">
			<input type="submit" onclick="myFunction()" value="Register" >
		</div>
	</div>
</body>
</html>
@endsection
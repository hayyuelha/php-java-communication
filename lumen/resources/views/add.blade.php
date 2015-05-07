@extends('master')

@section('title')
Add User
@endsection
@section('btn')
<div class="btn">
	<a href="{{url('/')}}"> View User</a>
</div>
<div class="btn-active">
	<a> Add User </a>
</div>
@endsection
@section('content')
	<div class="login">	
		<div class="ribbon-wrapper h2 ribbon-red">
			<div class="ribbon-front">
				<h2>Add</h2>
			</div>
			<div class="ribbon-edge-topleft2"></div>
			<div class="ribbon-edge-bottomleft"></div>
		</div>
		<form role="form" method="POST" action="{{url('/add')}}">
			<ul>
				<li>
					<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required>
				</li>
				<li>
					<input type="text" class="text" name="nama" value="Nama Lengkap" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Lengkap';}" required>
				</li>
				<li>
					<input type="text" class="text" name="alamat" value="Alamat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat';}" >
				</li>
				<li>
					<input type="text" class="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
				</li>
				<li>
					<input type="text" class="text" name="situs" value="Situs" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Situs';}" >
				</li>
				<li>
					<input type="text" class="text" name="telp" value="Nomor Telepon" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nomor Telepon';}" >
				</li>
				<li>
					<input type="password" name = "password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
				</li>
			</ul>
			
			<div class="submit">
				<input type="submit" value="Add" >
			</div>
		</form>
	</div>
</body>
</html>
@endsection
<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{
	
	public function getView(){
		return view('view');
	}

	public function getAdd(){
		return view('add');
	}

	public function showUser(Request $request){
		$username = $request->username;
		$password = $request->password;

		//ASK if match, return error or user information 
		// if ($response) {
		// 	$user = User::find($id);
		// }
		$user = new User;
		
		$user->username = "akuafik";
		$user->password = "akuafik";
		$user->name = "Khoirunnisa Afifah";
		$user->address = "Bandung";
		$user->email = "akuafik@gmail.com";
		$user->phone = "0000000";
		$user->site = "www.com";

		return view('home', compact('user'));
	}

	public function postAdd(Request $request){
		$user = new User;

		$user->username = $request->username;
		$user->password = $request->password;
		$user->name = $request->nama;
		$user->address = $request->alamat;
		$user->email = $request->email;
		$user->phone = $request->telp;
		$user->site = $request->situs;

		$user->save();

		return view('/');
	}


}





















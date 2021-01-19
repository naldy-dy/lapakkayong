<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

use App\Models\UserDetail;



class AuthController extends Controller{

	function ShowLogin(){
		$data['list_user'] = User::all();
		return view('login');
	}

	function prosesLogin(){

		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			$user =  Auth::user();
			if($user->level == 1) return redirect('admin/beranda')->with('seccess','Login Berhasil');
			if($user->level == 2) return redirect('penjual/penjual-dashboard')->with('seccess','Login Berhasil');
			if($user->level == 3) return redirect('/index')->with('seccess','Login Berhasil');
		}else{                           
			return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
		}
		// if(request('login_as')== 1){
		// 	if(Auth::guard('pembeli')->attempt(['email'=>request('email'), 'password' => request('password')])){
		// 		return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
		// 	}

		// }else{
		// 	if(Auth::guard('penjual')->attempt(['email'=>request('email'), 'password' => request('password')])){
		// 		return redirect('beranda/penjual')->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
		// 	}

		// }
		
	// 	if(request('login_as')== 1){
	// 		if(Auth::guard('pembeli')->attempt(['email'=>request('email'), 'password' => request('password')])){
	// 			$user= Auth::user();
	// 			if($user->level == 1) return redirect('admin/beranda')->with('success', 'Login Berhasil');
	// 			if($user->level == 1) return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
	// 		}else{
	// 			return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
	// 		}

	// 	}else{
	// 		if(Auth::guard('penjual')->attempt(['email'=>request('email'), 'password' => request('password')])){
	// 			return redirect('beranda/penjual')->with('success', 'Login Berhasil');
	// 		}else{
	// 			return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
	// 		}

		
	}
	
	function Logout(){
		Auth::logout();
		return redirect('login');
	}

	function Registrasi(){
			return view('signup');
 	}
 	function prosesRegis(){

 		$user = new User;
 		$user->nama = request('nama');
 		$user->username = request('username');
 		$user->email = request('email');
 		$user->tmptlahir = request('tmptlahir');
 		$user->tgllahir = request('tgllahir');
 		$user->jenis_kelamin = request('jenis_kelamin');
 		$user->password = bcrypt(request('password'));
 		$user->profil = request('gambar');
 		$user->level = request('level');
 		$user->save();

 		$userDetail = new UserDetail;
 		$userDetail->id_user = $user->id;
 		$userDetail->no_handphone = request('no_handphone');
 		$userDetail->save();
 		
 		return redirect('login')->with('success', 'Data Berhasil ditambah');
 	}

	function Forgot(){
		
	}
}
<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;



class AuthController extends Controller{

	function ShowLogin(){
		$data['list_user'] = User::all();
		return view('login');
	}

	function prosesLogin(){

		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			$user =  Auth::user();
			if($user->level == 1) return redirect('admin/beranda')->with('seccess','Login Berhasil');
			if($user->level == 2) return redirect('penjual-dashboard')->with('seccess','Login Berhasil');
			if($user->level == 3) return redirect('pembeli-dashboard')->with('seccess','Login Berhasil');
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
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('login');
	}

	function Registrasi(){
			return view('signup');
 	}
 	function prosesRegis(){
 		$regis = new User;
 		$regis->nama = request('nama');
 		$regis->username = request('username');
 		$regis->email = request('email');
 		$regis->tmptlahir = request('tmptlahir');
 		$regis->tgllahir = request('tgllahir');
 		$regis->password = bcrypt(request('password'));
 		$regis->profil = request('gambar');
 		$regis->save();

 		return redirect('signup')->with('success', 'Data Berhasil ditambah');
 	}

	function Forgot(){
		
	}
}
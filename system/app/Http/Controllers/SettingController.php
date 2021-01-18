<?php 

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SettingController extends Controller{

	function index(){
		$data['user'] = Auth::user();
		return view('admin.setting.index');
	}

	function store(){
		$data = request()->all();

		if(request('current')){
			$user = Auth::user();
			$check = Hash::check(request('current'), $user->password);
			if($check){
				if(request('new') == request('confirm')){

					$user->password = bcrypt(request('new'));
					$user->save();

					return back()->with('success', 'Password Berhasil Diganti');

				}else{
				return back()->with('danger', 'Password Baru Tidak cocok');

				}
			}else{
				return back()->with('danger', 'Password Sekarang Salah');
			}
			
		}else{

		}
		return back()->with('danger', 'Password Kosong');
	}
}


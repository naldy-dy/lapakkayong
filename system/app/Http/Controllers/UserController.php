<?php 
namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use App\Models\UserDetail;


 class UserController extends Controller{

 	function index(){
 		$data['list_user'] = User::all();
 		return view('admin.user.index', $data);
 	}
 	function create(){
 		return view('admin.user.create');
 	}
 	function store(UserStoreRequest $request){
 		$user = new User;
 		$user->nama = request('nama');
 		$user->username = request('username');
 		$user->email = request('email');
 		$user->tmptlahir = request('tmptlahir');
 		$user->tgllahir = request('tgllahir');
 		$user->jenis_kelamin = request('jenis_kelamin');
 		$user->password = bcrypt(request('password'));
 		$user->level = request('level');
 		$user->save();
 		$user->handleUploadProfil();
 		$userDetail = new UserDetail;
 		$userDetail->id_user = $user->id;
 		$userDetail->no_handphone = request('no_handphone');
 		$userDetail->save();

 		
 		return redirect('admin/user')->with('success', 'Data Berhasil ditambah');
 	}

 	function show(User $user){
 		$loggedUser = request()->user();
 		if($loggedUser->id !=$user->id) return abort(404);
 		$data['user'] = $user;
 		return view('admin.user.show', $data);
 	}
 	function edit(User $user){
 		$data['user'] = $user;
 		return view('admin.user.edit', $data);

 	}
 	function update(User $user){
 		$user->nama = request('nama');
 		$user->username = request('username');
 		$user->email = request('email');
 		$user->tmptlahir = request('tmptlahir');
 		$user->tgllahir = request('tgllahir');
 		if(request('password')) $user->password = request('password');
 		
 		$user->save();

 		return redirect('user')->with('success', 'Data Berhasil diedit');
 	}
 	function destroy(User $user){
 		$user->delete();
 		return redirect('user')->with('danger', 'Data Berhasil dihapus');
 	}




 }
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}
	function verify(Request $request){
		
	
		$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->first();
					print_r($user);
		if($user->id > 0){
			$request->session()->put('id', $user->id);
					$request->session()->put('uname', $user->username);
										$request->session()->put('api_key', $user->api_key);


			return redirect()->route('home.index');
		}else{
			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}
}
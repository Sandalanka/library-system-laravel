<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function registation(Request $requset){
        $table=new User();
        $this->validate($requset,[

        ]);
       $table->name=$requset['name'];
       $table->id_number=$requset['id'];
       $table->address=$requset['address'];
       $table->contact=$requset['contact'];
       $table->email=$requset['email'];
       $table->password=bcrypt($requset['password']);
    $table->save();
    return redirect()->back();

    }

    public function show(){
        $table=User::all();
        return view('mdetails',compact('table'));
    }

    public function mlogin(Request $request){
        // $data=$request->only('email','password');
          if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
             return redirect()->route('member');
          }
         //return redirect()->route('adminshow');
          return redirect()->back();
        }

        public function logout(){
            Auth::logout();
            Session::flush();
            return redirect('/');
        }
}



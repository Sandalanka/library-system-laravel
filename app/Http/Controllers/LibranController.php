<?php

namespace App\Http\Controllers;
use App\libraran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LibranController extends Controller
{
    public function libraranadd(Request $request){
        $table=new libraran();
        $table->name=$request['name'];
        $table->id_number=$request['id'];
        $table->contact=$request['contact'];
        $table->email=$request['email'];
        $table->password=bcrypt($request['password']);
        $table->save();
        return redirect()->back();
    }

    public function login(Request $request){
        // $data=$request->only('email','password');
          if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('backend');
           // return view('backend');
          }
         //return redirect()->route('adminshow');
          return redirect()->back();
        }

     
}

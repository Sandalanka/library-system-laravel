<?php

namespace App\Http\Controllers;
use App\book_issu;
use Illuminate\Http\Request;

class book_issuController extends Controller
{
    public function borrow(Request $request){
        $table=new book_issu();
        $table->name=$request['name'];
        $table->id_number=$request['id'];
        $table->bname=$request['bname'];
        $table->title=$request['tittle'];
        $table->return='2011.03.26';
        $table->save();
        return redirect()->back();
    }
    public function backend(){
        $table=book_issu::all();
        return view('backend',compact('table'));
    }
}

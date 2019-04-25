<?php

namespace App\Http\Controllers;
use App\book_feedback;
use Illuminate\Http\Request;

class book_feedbackController extends Controller
{
    public function feedback(Request $request){
        $table=new book_feedback();
        $table->email=$request['email'];
        $table->comment=$request['comment'];
        $table->save();
        return redirect()->back();
    }
    

}

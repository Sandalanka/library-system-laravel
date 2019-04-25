<?php

namespace App\Http\Controllers;
use App\book;
use App\DB;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function show(){
$table=book::all();
return view('book',compact('table'));
    }

    public function bookadd(Request $request){
        $table=new book();
        $table->name=$request['name'];
        $table->author=$request['author'];
        $table->edition=$request['edition'];
        $table->tittle=$request['tittle'];
        $table->save();
        return redirect()->back();

    }
    public function showw(){
        $table=book::all();
        return view('bookdetails',compact('table'));
            }

            public function member(){
                $table=book::all();
                return view('member',compact('table'));
            }
            public function edite($id){
                $table=book::find($id);
        
                return view('edite',['table'=>$table]);
            

            
                //return reidirect()->back();
            
            }

            public function update(Request $request){
                $table=new book();
                $table->name=$request['name'];
                $table->author=$request['author'];
                $table->edition=$request['edition'];
                $table->tittle=$request['tittle'];
                $table->$request['id'];
                $table->update();
                return redirect()->back();
            }

            public function deleted($id){
                //$table=new book();
                $table=book::find($id);
          //  DB::delete('delete from book where id = ?',[$id]);
       //$table->delete();
                return redirect()->back();
            

            
                //return reidirect()->back();
            
            }
}

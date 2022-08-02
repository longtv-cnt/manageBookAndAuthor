<?php

namespace App\Http\Controllers\modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function index(Request $request){
    // $bookList=DB::table('book')->get();
    $bookList=DB::table('book')->leftJoin('author','author.nickname','=','book.nickname')->select('book.*','author.fullname')
    ->orderBy('book.created_at','asc')->get();
    return view('book.index')->with([
        'index'=>'1',
        'bookList'=> $bookList
    ]);
    }
public function add_view_book (Request $request){
    $authorlist = DB::table('author')->select('nickname')
    ->orderBy('created_at','asc')->get();
    return view('book.add_book')->with([
        'index'=>'1',
        'authorList'=>$authorlist

    ]);

    }
public function viewAdd() {

}
public function post_add_book(Request $request){

        DB::table('book')->insert([
            'title'=>$request->title,
            "content"=>$request->content ,
            "price"=>$request->price,
            "publisher"=>$request->input('publisher'),
            "nickname"=>$request->input('nickname'),
            "created_at"=>date('Y-m-d H:s:i'),
            "updated_at"=>date('Y-m-d H:s:i')
        ]);
         return redirect()->route('bookList');

    }
public function edit($id){
    $book=Book::query()->find($id);
    $authorList=DB::table('author')->select('nickname')
    ->orderBy('created_at','asc')->get();
    return view('book.edit',compact('book','authorList'));
}
public function post_edit_book($id,Request $request){
    $book=Book::find($id);
    $book->title=$request->title;
    $book->content=$request->content;
     $book-> price = $request->price;
     $book->publisher=$request->publisher;
     $book->nickname=$request->nickname;
     $book->save();
     return redirect()->route('bookList');

}
public function delete($id){
    $book=Book::find($id);
   $book->delete();

     return redirect()->route('bookList');

}
}

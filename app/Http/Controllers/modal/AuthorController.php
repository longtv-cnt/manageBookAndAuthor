<?php

namespace App\Http\Controllers\modal;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthorController extends Controller
{
    public function index(Request $request)
    {
        $authorlist = DB::table('author')->orderBy('fullname', 'asc')->paginate(20);
        return view('index')->with([
            'index' => '1',
            'authorList' => $authorlist
        ]);
    }
    public function add_view(Request $request)
    {
        return view('add_author');
    }
    public function post_add_author(Request $request)
    {
        DB::table('author')->insert([
            'nickname' => $request->nickname,
            "fullname" => $request->fullname,
            "address" => $request->address,
            "email" => $request->input('email'),
            "phone_number" => $request->input('phone_number'),
            "created_at" => date('Y-m-d H:s:i'),
            "updated_at" => date('Y-m-d H:s:i')
        ]);
        return redirect()->route('authorList');
    }
    public function delete($nickname)
    {
        // $author=Author::query()->find($nickname);
        // $author->delete();
        DB::table('author')->where('nickname', $nickname)->delete();
        return redirect()->route('authorList');
    }
    public function edit_author($nickname)
    {
        
        $author = DB::table('author')->where('nickname', $nickname)->first();
        return view('edit_author', compact('author'));
    }
    public function post_edit_author(Request $request, $nickname)
    {


        $author = DB::table('author')->where('nickname', $nickname)->first();



        $author->email = $request->email;
        $author->address = $request->address;
        $author->phone_number = $request->phone_number;
        DB::table('author')->where('nickname', $author->nickname)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);
        return redirect()->route('authorList');
    }
}

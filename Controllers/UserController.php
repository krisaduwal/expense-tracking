<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function signupUser(Request $req){
        // dd($req->all());

        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);

        return redirect()->route('login');


    }

    public function loginUser(Request $req){

        // dd($req->all());

        $req->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);

        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect()->route('welcome');
        } else {
            return back()->with('fail', 'user not found!');
        }

        
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }

    public function delete($id){
        $data= user::find($id);
        $data->delete();
        return redirect('/');

    }

    public function edit($id){
        $data= user::find($id);
        return view('edit', ['item' => $data]);
    }

    public function saveExpenses(Request $req){
        $teeObj = new user();
        $teeObj->title= $req->title;
        $teeObj->category= $req->category;
        $teeObj->date= $req->date;
        $teeObj->amount= $req->amount;

        $teeObj ->save();
        return redirect('/');
    }
    public function updateExpenses(Request $req){
        $data = user::find($req->id);
        $data->title = $req->title;
        $data->category= $req->category;
        $data->date= $req->date;
        $data->amount= $req->amount;
        $data ->save();
        return redirect('/');
        
        
    }
}

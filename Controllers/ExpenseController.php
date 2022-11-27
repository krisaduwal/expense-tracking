<?php

namespace App\Http\Controllers;

use App\Models\Expenses;


use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        return view('welcome', ['list'=>Expenses::all()]);
    }

    public function delete($id){
        $data= Expenses::find($id);
        $data->delete();
        return redirect('/');

    }

    public function edit($id){
        $data= Expenses::find($id);
        return view('edit', ['item' => $data]);
    }

    public function saveExpense(Request $req){
        $teeObj = new Expenses();
        $teeObj->title= $req->title;
        $teeObj->category= $req->category;
        $teeObj->date= $req->date;
        $teeObj->amount= $req->amount;

        $teeObj ->save();
        return redirect('/');
    }
    public function updateExpense(Request $req){
        $data = Expenses::find($req->id);
        $data->title = $req->title;
        $data->category= $req->category;
        $data->date= $req->date;
        $data->amount= $req->amount;
        $data ->save();
        return redirect('/');


        
        
    }

}
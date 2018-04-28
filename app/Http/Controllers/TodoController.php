<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        return Todo::all();
        
        // $data['todos'] = Todo::all();
        //return view('todo.index',$data);
    }

    public function create(){
        return view('todo.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|max:25',
        ]);
        
        return $request->all();
    }
}

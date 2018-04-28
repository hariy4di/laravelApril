<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        //return Todo::all();

        $data['todos'] = Todo::all();
        return view('todo.index',$data);
    }

    public function create(){
        return view('todo.create');
    }

    public function store(Request $request){
        
        $this->rules($request);

        $todo = new Todo();
        // $todo->title        = $request->title;
        // $todo->description  = $request->description;
        // $todo->save();
        $todo->create($request->all());
        return redirect('/todo');
    }

    function edit($id){
        $data['todo'] = Todo::find($id);
        return view('todo.edit',$data);
    }

    function update($id, Request $request){
        $this->rules($request);

        $todo = Todo::find($id);
        //$todo->title        = $request->title;
        //$todo->description  = $request->description;
        
        $todo->update($request->all());
        return redirect('/todo');
    }

    function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/todo')->with('message','Data Todo '.$todo->title.' Telah Dihapus');
    }

    function rules($request){
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|max:25',
        ]);
    }
}

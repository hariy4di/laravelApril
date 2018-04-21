<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['categories'] = array('Category 1','Category 2','Category 3');
        return view('category.index',$data);
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|min:10'
        ]);
        
        return $request->all();
    }
}

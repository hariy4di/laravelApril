<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = DB::table('users')->get();
        return view('user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
                            'name'      =>  $request->name,
                            'email'     =>  $request->email,
                            'password'  =>  Hash::make($request->password)]);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user']=DB::table('users')->where('id',$id)->first();
        return view('user.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $password = $request->password;

        // $data['todos'] = Todo::paginate(3);
        // {{ $todos->links() }}

        if(!empty($password)){
            // update password
            DB::table('users')->where('id',$id)->update([
                                'name'      =>  $request->name,
                                'email'     =>  $request->email,
                                'password'  =>  Hash::make($request->password)]);
        }else{
            // jangan update password
            DB::table('users')->where('id',$id)->update([
                                'name'      =>  $request->name,
                                'email'     =>  $request->email]);
        }
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('users')->where('id',$id);
        // membaca data nya terlebih dahulu dan disimpan dalam variabel user
        $user = $query->get();
        // proses hapus
        $query->delete();
        return redirect('user')->with('status','user dengan name '.$user->name .'has deleted');
    }
}

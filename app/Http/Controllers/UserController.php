<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::get();    
        return view ('user.index', compact('data'));
    }

    public function create()
    {
        return view ('user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect(route('user.index'))->with('success', 'success add data');
    }

    public function edit($id)
    {
        $item = User::find($id);
        if($item){
            $data['item'] = $item;
            return view('user.edit', $data);
        }
        return abort(404);
    }

    public function update(Request $request, $id){
        $item = User::find($id);
        if($item){
            $item->name = $request->name;
            $item->level = $request->level;
            $item->role_id = $request->role_id;
            $item->password = $request->password;
            if($item->save()){
                return redirect(route('user.index'))->with('success', 'success update data');
            }
        }
        return abort(404);
    }
}

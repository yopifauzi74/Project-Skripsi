<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $data = Role::get();
        return view ('role.index', compact('data'));
    }

    public function create()
    {
        return view ('role.create');
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->code = $request->code;
        $role->name = $request->name;
        $role->save();

        return redirect(route('role.index'))->with('success','success add data');
    }

    
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Permisson;
use App\Models\RolePermisson;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = Admin::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            Auth::guard('admin')->login($user);
            return redirect(route('admin.candidate.view'));
        } else {
            return redirect('/')->with('message', 'Your email and password does not match !');
        }

        // $credentials = $request->only('email', 'password');


        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect(route('admin.index'));
        // } else {

        //     return redirect('/')->with('message', 'Your email and password does not match !');
        // }
    }



    public function logout()
    {

        Session::flush();

        Auth::logout();

        return Redirect(route('adminlogin'));
    }

    public function adminIndex()
    {

        $users  =  DB::table('admin')->get();

        return view('admin.index')->with('users', $users);
    }
    public function create()
    {
        return view('admin.Add');
    }
    public function edit($id)
    {
        $user  = Admin::find($id);
        return view('admin.edit')->with('user', $user);
    }

    public function store(Request $request)
    {

        Admin::create($request->all());

        return redirect(route('admin.index'));
    }



    public function update(Request $request)
    {

        Admin::find($request->id)->update($request->all());

        return redirect(route('admin.index'));
    }

    public function destroy($id)

    {

        $user = Admin::find($id);
        $user->delete();
        return redirect(route('admin.index'));
    }

    public function privillage(Request $request)

    {

        $permissons = Permisson::all();

        return view('admin.privillage')->with('permissons', $permissons);
    }

    public function addPrivillage(Request $request)

    {
        RolePermisson::where('role_id', $request->role)->delete();


        foreach ($request->access as $row) {
            $RolePermisson = new RolePermisson;
            $RolePermisson->role_id = $request->role;
            $RolePermisson->permisson_id = $row;
            $RolePermisson->save();
        }

        $roleType =  $request->roleType;
      
        if( $roleType){
            return redirect("/privillage/setup?roleType=$roleType");

        }
        return redirect(route('admin.privillage'));
    }
}

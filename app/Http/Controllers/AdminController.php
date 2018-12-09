<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('admin.users',compact('users'));
    }
    public function mail($id)
    {
        $user = User::find($id);

        return view('admin.mail',compact('user'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users');
    }

}

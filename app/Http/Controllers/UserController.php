<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UserController extends Controller
{
    public function create()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $User = new users;
        $User->user_id= uniqid($request->Unameph);
        $User->name = $request->Uname;
        $User->email = $request->Uemail;
        if ($request->Upass == $request->re_pass) {
            $User->password = $request->Upass;
        }
        $User->save();
        return redirect('/');
    }
}

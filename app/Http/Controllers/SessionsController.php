<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware("guest", ["except" => "doLogout"]);
    }

    public function index()
    {
        return view("sessions/index.html");
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only(["email", "password"]);

        if (Auth::attempt($credentials)) {
            return redirect("/admin");
        }

        return redirect("/login")->withErrors([
            "message" => "Invalid email or password",
        ]);
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect("/");
    }
}

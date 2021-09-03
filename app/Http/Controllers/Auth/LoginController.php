<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $this->validate( $request, [ 
           'email' => 'required|email', 
           'password' => 'required', 
        ]);

        // if(!auth()->attempt($request->only('email', 'password')))

        if( !Auth::attempt($request->only('email', 'password'), $request->remember)) {
           return back()->with('status', 'Invalid Credentials');
       }
       return redirect()->route('dashboard');
    }
}

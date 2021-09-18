<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::inRandomOrder()->with('files','advertisement')->get();
        // dd($users->toArray());
        return view('welcome',compact('users'));
    }
    public function indexApi(){
        $users=User::with('files','advertisement')->get();
        return response()->json($users);
    }
}

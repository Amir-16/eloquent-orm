<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Model\Nid;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function getInfo(){
    //
    //     $user=User::find(Auth::user()->id);
    //     return view('welcome',compact('user'));
    // }

    //if we want data from Nid

    // public function getInfo(){
    //   $nid =Nid::where('user_id',Auth::user()->id)->first();
    //   return view('welcome',compact('nid'));
    // }

    public function allInfo(){
      $user =User::find(Auth::user()->id);
      return view('welcome',compact('user'));

    }

}

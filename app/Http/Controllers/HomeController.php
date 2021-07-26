<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $follow = DB::table('followers')->get();
        $detail = User::all();
        $user = User::all();
        $data = json_decode(file_get_contents("https://api.jsonstorage.net/v1/json/41624f5e-2d72-45c7-a6a0-726abc282fbc"), true);
        // echo($data['name']);
        return view('welcome',compact('data','user','follow','detail'));
    }
}

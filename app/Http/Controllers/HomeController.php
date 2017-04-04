<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Reminder;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        $reminders = Reminder::with('priority')->with('reservation')->where('user_id', '=', $user->id)->get();
        return view('home', ['reminders' => $reminders]);
    }
}

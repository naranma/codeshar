<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snippet;

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
    public function index(Request $request)
    {
        $snippets = null;
        if($request->search){
            $snippets = Snippet::where('name','like', "%$request->search%")
                                ->orWhere('code','like', "%$request->search%")
                                ->orWhere('description','like', "%$request->search%")->orderBy('id','desc')->paginate(8);
        } else {
            $snippets = Snippet::orderBy('id','desc')->paginate(8);
        }
        
        return view('home', compact('snippets'));
    }
}

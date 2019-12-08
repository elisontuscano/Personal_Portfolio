<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\reference;

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

    public function about(){
        $about = \App\About::first();
        return view("about", ["data"=>$about]);
    }


    public function skills()
    {
        return view('skills');
    }

    public function resume()
    {
       $resume = \App\resume::all();
       //return view::make('resume', compact('resume'));
         return view("resume", ["data"=>$resume]);
    }

    public function reference()
    {
       $reference = \App\reference::all();
         return view("reference", ["data"=>$reference]);
    }

    public function portfolio()
    {
       $portfolio = \App\portfolio::all();
         return view("portfolio", ["data"=>$portfolio]);
    }

    public function hireme()
    {
       $hireme = \App\hireme::all();
         return view("hireme", ["data"=>$hireme]);
    }

    public function contactme()
    {
      
         return view("contactme");

    }

    public function blog()
    {
      
         return view("blog");
    }

    public function add()
    {
      
         return view("add");
    }

    public function edit()
    {
      
         return view("edit");
    }

    public function admin()
    {
       $hireme = \App\hireme::all();
       $portfolio = \App\portfolio::all();
       $reference = \App\reference::all();
       $resume = \App\resume::all();
       $about = \App\About::all();
      // $data =["portfolio"=>$portfolio , "reference"=>$reference ,"resume"=>$resume, "about"=>$about];
        return view("admin", ["hire"=>$hireme , "portfolio"=>$portfolio , "reference"=>$reference , "resume"=>$resume , "about"=>$about]);
    }

    public function destroy(Request $request)
    {
        //dd('in');
        $p = $request->get('reference');
       //  dd($p);
        $pn= reference::where('rid',$p)->first(); 
       // dd($pn);
        $pn->delete();
        
      
           $hireme = \App\hireme::all();
           $portfolio = \App\portfolio::all();
           $reference = \App\reference::all();
           $resume = \App\resume::all();
           $about = \App\About::all();
          // $data =["portfolio"=>$portfolio , "reference"=>$reference ,"resume"=>$resume, "about"=>$about];
            return view("admin", ["hire"=>$hireme , "portfolio"=>$portfolio , "reference"=>$reference , "resume"=>$resume , "about"=>$about]);
        
    }

}

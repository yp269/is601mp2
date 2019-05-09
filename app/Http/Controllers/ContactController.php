<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    function get()
    {
        return view('contact');
    }
//    function store(Request $request)
//    {
//        #$name = $request->first_name; #.' '. $request->last_name;
//
//        # dd($name);
//
//        #return redirect()->route('thankyou', ['name' => $name]);
//    }
    function store(Request $request)
    {
        $name = $request->first_name; #.' '. $request->last_name;
        # dd($name);
        return redirect()->route('thankyou', ['name' => $name]);
    }
    function thankyou($name)
    {
        return view('thankyou')->with(compact('name'));
    }
}
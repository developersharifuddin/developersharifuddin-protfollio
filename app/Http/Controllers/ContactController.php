<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Slider;
use App\Models\Category;
use App\Mail\VisitorContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
   public function contact(){
         $sliders = Slider::all();
         $categories = Category::all();
         $items = Item::all();
         return view('welcome', compact('sliders', 'categories','items'));
 
   }

public function view()
{
    return view('contact.show');
}

public function SubmitContructform(Request $request)
{ 
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    Mail::to('sharif.uddin.9977@gmail.com')->send(new VisitorContact($data));
    //Session::flash('message','Your message has been sent');
    Toastr::success('Your Contruct form Submit Successfully!', 'success', ["positionClass" => "toast-top-right"]);
    return redirect()->back();



}
}

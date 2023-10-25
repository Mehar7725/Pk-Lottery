<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function ContactMsgForwerd(Request $request)   {
       
        $msg = Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'cnic'=>$request->cnic,
            'msg'=>$request->msg,
        ]);
        
        if ($msg) {
            return redirect()->back()->with('success',"Your Problem Deliverd to Admin, Admin Contact with you very soon.");
        } else {
            return redirect()->back()->with('error',"Something went Rong, Please Submit Your Problem After Some Time.");
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BuyLottery;
use App\Models\Contact;
use App\Models\Lottery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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



    public function Login()  {

        
        return view('partner.login');
    }






    public function LoginPartner(Request $request)  {

        $user = User::where(['cnic'=>$request->cnic])->first();
        if (empty($user)) {
            return redirect()->back()->with('error',"CNIC Number is invelid!");
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error',"Entered In Correct Password!");
        }
        if ($user->role == 0) {
            return redirect()->back()->with('error',"CNIC Number is invelid!");
        }
        Auth::login($user);

        if ($user->role == 1) {
            return redirect('/partner');
        } elseif($user->role == 2) {
            return redirect('/admin-dashboard');
        }
        
        
        
    }






    public function VisiterLogin(Request $request)  {

        $user = User::where(['cnic'=>$request->cnic, 'role'=>0])->first();
        $lottery = BuyLottery::where(['cnic'=>$request->cnic])->first();
        if (empty($user)) {
            return response()->json(['error'=> true]);
        }
        if (empty($lottery)) {
            return response()->json(['error'=> true]);
        }

        Auth::login($user);
        return response()->json(['success'=> true]);
       
        
        
        
    }



       // ========= Logout Function =====
    
       public function logout(){
        // Session::Flush();
        Auth::logout();

        return redirect()->to('/login');
    }


}

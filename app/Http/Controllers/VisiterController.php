<?php

namespace App\Http\Controllers;

use App\Models\AccountDetail;
use App\Models\BuyLottery;
use App\Models\ClaimLottery;
use App\Models\CompanyDetail;
use App\Models\User;
use App\Models\Winner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VisiterController extends Controller
{
    //
    public function Home()  {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
               return redirect()->to('partner');
            }
            if (Auth::user()->role == 2) {
               return redirect()->to('admin-dashboard');
            }
        }
        $company_detail = CompanyDetail::first();
        return view('visitor.home', compact('company_detail'));
    }

    public function Winners()  {
        if (Auth::user()) {
           
            if (Auth::user()->role == 2) {
               return redirect()->to('admin-dashboard');
            }
        }
        $winners = Winner::all();
        return view('visitor.lotterywinners', compact('winners'));
    }




    public function OurLottery()  {
        if (!Auth::user()) {
            return redirect('/login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->to('partner');
         }
         if (Auth::user()->role == 2) {
            return redirect()->to('admin-dashboard');
         }

         $buy_lotteries = BuyLottery::where('cnic','=',Auth::user()->cnic)->latest()->get();
        return view('visitor.ourlottery', compact('buy_lotteries'));
    }

    public function ShippingDetails($id)  {
        if (!Auth::user()) {
            return redirect('/login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->to('partner');
         }
         if (Auth::user()->role == 2) {
            return redirect()->to('admin-dashboard');
         }
         $lottery = BuyLottery::find($id);
         $accounts = AccountDetail::latest()->get();
        return view('visitor.shippingdetail', compact('lottery','accounts'));
    }

    public function ShippingConfirm(Request $request)  {
        if (!Auth::user()) {
            return redirect('/login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->to('partner');
         }
         if (Auth::user()->role == 2) {
            return redirect()->to('admin-dashboard');
         }
        
         $user = User::where(['cnic'=>$request->cnic])->first();
        if (!empty($user)) {
            if ($user->role != 0) {
                return redirect()->back()->with('error',"This is a Partner,Use Another CNIC!");
            }
        }

        if (empty($user)) {
            User::create([
                'name'=> $request->name,
                'father_name'=> $request->father_name,
                'cnic'=> $request->cnic,
                'dob'=> $request->dob,
                'address'=> $request->address,
                'reffral_id'=> $request->reffral_id,
                'role'=> 0,
            ]);
        }

        if ($request->trans_id != null) {
            $transection = ClaimLottery::where(['transaction_id'=>$request->trans_id])->first();
        if (!empty($transection)) {
            return redirect()->back()->with('error',"Transaction ID Invalid, This ID Already Submmitted!");
        }
        }
       

        $buy_lottery = BuyLottery::find($request->buy_id);

   if ($request->hasfile('image') || $request->payment_type == 0) {
    
       // Upload and save image
       $transection_img = $request->image;
       $imageName_trans =  $transection_img->getClientOriginalName();
       $transection_img->move(public_path().'/assets/claim/trans', $imageName_trans);
       $imageData_trans = $imageName_trans;

    
       $claim_lottery = ClaimLottery::create([
        'buy_id'=> $request->buy_id,
        'name'=> $request->name,
        'father_name'=> $request->father_name,
        'cnic'=> $request->cnic,
        'lottery_code'=> $buy_lottery->lottery_code,
        'lottery_id'=> $buy_lottery->lottery_id,
        'lottery_name'=> $buy_lottery->lottery_name,
        'lottery_image'=> $buy_lottery->lottery_image,
        'reffral_id'=> $buy_lottery->reffral_id,
        'reffral_name'=> $buy_lottery->reffral_name,
        'reffral_cnic'=>  $buy_lottery->reffral_cnic,
        'dob'=> $request->dob,
        'transaction_image'=> $imageData_trans,
        'transaction_id'=> $request->trans_id,
        'address'=> $request->address,
        'price'=> $request->price,
        'payment_type'=> $request->payment_type,
    ]);
    

    if ($claim_lottery) {
        $buy_lottery->status = 3;
        $buy_lottery->update();
        return redirect()->to('/our-lottery')->with('success',"Lottery Claimed Successfuly, Please wait Admin Approvel!");
    } else {
        return redirect()->back()->with('error',"Something Rong Tryagain Later!");
    }
    

   } else {
    
    $claim_lottery = ClaimLottery::create([
        'buy_id'=> $request->buy_id,
        'name'=> $request->name,
        'father_name'=> $request->father_name,
        'cnic'=> $request->cnic,
        'lottery_code'=> $buy_lottery->lottery_code,
        'lottery_id'=> $buy_lottery->lottery_id,
        'lottery_name'=> $buy_lottery->lottery_name,
        'lottery_image'=> $buy_lottery->lottery_image,
        'reffral_id'=> $buy_lottery->reffral_id,
        'reffral_name'=> $buy_lottery->reffral_name,
        'reffral_cnic'=>  $buy_lottery->reffral_cnic,
        'dob'=> $request->dob,
        'address'=> $request->address,
        'price'=> $request->price,
        'payment_type'=> $request->payment_type,
    ]);

    if ($claim_lottery) {
        $buy_lottery->status = 3;
        $buy_lottery->update();
        return redirect()->to('/our-lottery')->with('success',"Lottery Claimed Successfuly, Please wait Admin Approvel!");
    } else {
        return redirect()->back()->with('error',"Something Rong Tryagain Later!");
    }


   }
   

 

       

     
        

        
        

    }

    public function ContactUs()  {
        return view('visitor.contactus');
    }








}

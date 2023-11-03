<?php

namespace App\Http\Controllers;

use App\Models\AccountDetail;
use App\Models\BuyLottery;
use App\Models\CompanyDetail;
use App\Models\Lottery;
use App\Models\PartnerCommission;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartnerController extends Controller
{
    //
    
    public function Partner()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/'); 
        }
        
        $lotteries = Lottery::where('remain_lotteries', '>' , 0)->take(10)->latest()->get();

        return view('partner.index', compact('lotteries'));
    }



    public function BuyLottery()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $lotteries = Lottery::where('remain_lotteries', '>' , 0)->latest()->get();
        return view('partner.buylottery', compact('lotteries'));
    }



    public function UpdateProfile()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        
        return view('partner.updateprofile');
    }



    public function UpdateProfileAction(Request $request)  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $partner = User::find(Auth::user()->id);
        if($request->hasFile('image'))
        {
            if ($partner->profile != null) {
                $path = public_path().'/assets/partner/img'.$partner->profile;
            
                if(File::exists($path))
                {
                    File::delete($path);
                }
    
            }
         
            // Upload and Store Images
             // Upload and save image
                    if($request->hasfile('image')){
                        $image = $request->image;
                        $imageName =  $image->getClientOriginalName();
                        $image->move(public_path().'/assets/partner/img', $imageName);
                        $imageData = $imageName;
                      
                }
                $partner->profile = $imageData;
                $partner->update();
                return redirect()->back()->with('error',"Profile Image Updated Successfuly!");
    }
        
        
    }



    public function UpdatePassword()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        
        return view('partner.password');
    }




    public function UpdatePasswordAction(Request $request)  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $partner = User::find(Auth::user()->id);
        
        if (!Hash::check($request->old_pass,$partner->password)) {
           return redirect()->back()->with('error',"Old Password is Inncorrect!");
        }
        if ($request->new_pass != $request->c_pass) {
            return redirect()->back()->with('error',"New Password & Confirm Password Miss Matched!");
        }
        
        $partner->password = $request->new_pass;
        $partner->update();
        return redirect()->back()->with('success',"Password Updated Successfully!");
    }




    public function ShipLottery($id)  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $lottery = Lottery::find($id);
        $accounts = AccountDetail::latest()->get();
        return view('partner.buylotteryform', compact('lottery','accounts'));
    }




    public function ShipLotteryConfirm(Request $request)  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $user = User::where(['cnic'=>$request->cnic])->first();
        if (!empty($user)) {
            if ($user->role != 0) {
                return redirect()->back()->with('error',"This is a Partner!");
            }
        }

        if ($request->trans_id != null) {
            $transection = BuyLottery::where(['transaction_id'=>$request->trans_id])->first();
            if (!empty($transection)) {
                return redirect()->back()->with('error',"Transaction ID Invalid, This ID Already Submmitted!");
            }
        }
     

        if (empty($user)) {
            User::create([
                'name'=> $request->name,
                'father_name'=> $request->father_name,
                'cnic'=> $request->cnic,
                'dob'=> $request->dob,
                'address'=> $request->address,
                'reffral_id'=> Auth::user()->id,
                'role'=> 0,
            ]);
        }

        $get_lottery = Lottery::find($request->lottery_id);


          // Upload and save image
          if($request->hasfile('image') || $request->payment_type == 0){

            $transection_img = $request->image;
            $imageName_trans =  $transection_img->getClientOriginalName();
            $transection_img->move(public_path().'/assets/trans', $imageName_trans);
            $imageData_trans = $imageName_trans;

            
        $buy_lottery = BuyLottery::create([
            'name'=> $request->name,
            'father_name'=> $request->father_name,
            'cnic'=> $request->cnic,
            'lottery_code'=> $request->lottery_code,
            'lottery_id'=> $request->lottery_id,
            'lottery_name'=> $get_lottery->name,
            'lottery_image'=> $get_lottery->image,
            'reffral_id'=> Auth::user()->id,
            'reffral_name'=> Auth::user()->name,
            'reffral_cnic'=> Auth::user()->cnic,
            'dob'=> $request->dob,
            'transaction_image'=> $imageData_trans,
            'transaction_id'=> $request->trans_id,
            'address'=> $request->address,
            'price'=> $request->cost,
            'partner_commission'=> $get_lottery->partner_commission,
            'status'=> 1,
            'payment_type'=> $request->payment_type,
        ]);


        
        $lottery = Lottery::find($request->lottery_id);
        $remain_lottery = $lottery->remain_lotteries - 1;
        $lottery->remain_lotteries =  $remain_lottery ;
        $lottery->update();
   

        if ($buy_lottery) {
            PartnerCommission::create([
                'partner_id'=> Auth::user()->id,
                'date'=> date('Y-m-d'),
                'name'=> Auth::user()->name,
                'father_name'=> Auth::user()->father_name,
                'cnic'=> Auth::user()->cnic,
                'dob'=> Auth::user()->dob,
                'address'=> Auth::user()->address,
                'lottery_code'=> $lottery->code,
                'lottery_name'=> $lottery->name,
                'commission'=> $lottery->partner_commission,
            ]);
            return redirect()->to('/buy-lottery')->with('success',"Lottery Buy Successfuly!");
        } else {
            return redirect()->back()->with('error',"Something Rong Tryagain Later!");
        }

          }else{

            if ($request->payment_type == 1) {


                $buy_lottery = BuyLottery::create([
                    'name'=> $request->name,
                    'father_name'=> $request->father_name,
                    'cnic'=> $request->cnic,
                    'lottery_code'=> $request->lottery_code,
                    'lottery_id'=> $request->lottery_id,
                    'lottery_name'=> $get_lottery->name,
                    'lottery_image'=> $get_lottery->image,
                    'reffral_id'=> Auth::user()->id,
                    'reffral_name'=> Auth::user()->name,
                    'reffral_cnic'=> Auth::user()->cnic,
                    'dob'=> $request->dob,
                    'address'=> $request->address,
                    'price'=> $request->cost,
                    'partner_commission'=> $get_lottery->partner_commission,
                    'status'=> 1,
                    'payment_type'=> $request->payment_type,
                ]);

                  
        $lottery = Lottery::find($request->lottery_id);
        $remain_lottery = $lottery->remain_lotteries - 1;
        $lottery->remain_lotteries =  $remain_lottery ;
        $lottery->update();
   

        if ($buy_lottery) {

            PartnerCommission::create([
                'partner_id'=> Auth::user()->id,
                'date'=> date('Y-m-d'),
                'name'=> Auth::user()->name,
                'father_name'=> Auth::user()->father_name,
                'cnic'=> Auth::user()->cnic,
                'dob'=> Auth::user()->dob,
                'address'=> Auth::user()->address,
                'lottery_code'=> $lottery->code,
                'lottery_name'=> $lottery->name,
                'commission'=> $lottery->partner_commission,
            ]);

            return redirect()->to('/buy-lottery')->with('success',"Lottery Buy Successfuly!");
        } else {
            return redirect()->back()->with('error',"Something Rong Tryagain Later!");
        }
                 
            } elseif($request->payment_type == 2) {
                
                $buy_lottery = BuyLottery::create([
                    'name'=> $request->name,
                    'father_name'=> $request->father_name,
                    'cnic'=> $request->cnic,
                    'lottery_code'=> $request->lottery_code,
                    'lottery_id'=> $request->lottery_id,
                    'lottery_name'=> $get_lottery->name,
                    'lottery_image'=> $get_lottery->image,
                    'reffral_id'=> Auth::user()->id,
                    'reffral_name'=> Auth::user()->name,
                    'reffral_cnic'=> Auth::user()->cnic,
                    'dob'=> $request->dob,
                    'address'=> $request->address,
                    'price'=> $request->cost,
                    'partner_commission'=> 0,
                    'status'=> 1,
                    'payment_type'=> $request->payment_type,
                ]);

                  
        $lottery = Lottery::find($request->lottery_id);
        $remain_lottery = $lottery->remain_lotteries - 1;
        $lottery->remain_lotteries =  $remain_lottery ;
        $lottery->update();
   

        if ($buy_lottery) {

            PartnerCommission::create([
                'partner_id'=> Auth::user()->id,
                'date'=> date('Y-m-d'),
                'name'=> Auth::user()->name,
                'father_name'=> Auth::user()->father_name,
                'cnic'=> Auth::user()->cnic,
                'dob'=> Auth::user()->dob,
                'address'=> Auth::user()->address,
                'lottery_code'=> $lottery->code,
                'lottery_name'=> $lottery->name,
                'commission'=> 0,
            ]);

            return redirect()->to('/buy-lottery')->with('success',"Lottery Buy Successfuly!");
        } else {
            return redirect()->back()->with('error',"Something Rong Tryagain Later!");
        }
            }
            


          }


          

         
          
  





// }


    }



public function TotalMembers()  {
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 1) {
        return redirect('/');
    }
    
    $company_detail = CompanyDetail::first();
    $members = User::where(['reffral_id'=>Auth::user()->id,'role'=>0])->latest()->get();
    return view('partner.total membars', compact('company_detail','members'));
    
}


public function Commission()  {
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 1) {
        return redirect('/');
    }
    
    $company_detail = CompanyDetail::first();
    $accounts = AccountDetail::latest()->get();
    $commission = PartnerCommission::where(['partner_id'=>Auth::user()->id])->get();
    return view('partner.commision', compact('company_detail','accounts','commission'));
    
}

public function FindLottery()  {
    if (!Auth::user()) {
        return redirect('/login');
    }
    if (Auth::user()->role != 1) {
        return redirect('/');
    }
    
    return view('partner.findlottery');
}



public function MyLottery(Request $request)  {
    if (!Auth::user()) {
        return redirect('/login');
    }
    if (Auth::user()->role != 1) {
        return redirect('/');
    }
    $lotteries = BuyLottery::where(['cnic'=>$request->cnic, 'reffral_id'=>Auth::user()->id])->get();
    if ($lotteries->count() <= 0) {
        return redirect()->back()->with('error',"This CNIC Have not Any Lottery Purchased!");
    }
    return view('partner.ourlottery', compact('lotteries'));
}



}

<?php

namespace App\Http\Controllers;

use App\Models\BuyLottery;
use App\Models\Lottery;
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
        
        $lotteries = Lottery::where('remain_lotteries', '>' , 0)->get();
        return view('partner.index', compact('lotteries'));
    }



    public function BuyLottery()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 1) {
            return redirect('/');
        }
        
        $lotteries = Lottery::where('remain_lotteries', '>' , 0)->get();
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
        
        return view('partner.buylotteryform', compact('lottery'));
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

        $transection = BuyLottery::where(['transaction_id'=>$request->trans_id])->first();
        if (!empty($transection)) {
            return redirect()->back()->with('error',"Transaction ID Invalid, This ID Already Submmitted!");
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

          // Upload and save image
        //   if($request->hasfile('image')){

            
            $image_front = $request->image_front;
            $imageName_front =  $image_front->getClientOriginalName();
            $image_front->move(public_path().'/assets/cnic/front', $imageName_front);
            $imageData_front = $imageName_front;

         


            $image_back = $request->image_back;
            $imageName_back =  $image_back->getClientOriginalName();
            $image_back->move(public_path().'/assets/cnic/back', $imageName_back);
            $imageData_back = $imageName_back;

         


            $transection_img = $request->trans_image;
            $imageName_trans =  $transection_img->getClientOriginalName();
            $transection_img->move(public_path().'/assets/trans', $imageName_trans);
            $imageData_trans = $imageName_trans;

         
          
  


        $buy_lottery = BuyLottery::create([
            'name'=> $request->name,
            'father_name'=> $request->father_name,
            'cnic'=> $request->cnic,
            'lottery_code'=> $request->lottery_code,
            'lottery_id'=> $request->lottery_id,
            'reffral_id'=> Auth::user()->id,
            'reffral_name'=> Auth::user()->name,
            'dob'=> $request->dob,
            'cnic_front'=> $imageData_front,
            'cnic_back'=> $imageData_back,
            'transaction_image'=> $imageData_trans,
            'transaction_id'=> $request->trans_id,
            'address'=> $request->address,
            'price'=> $request->cost,
        ]);


        $lottery = Lottery::find($request->lottery_id);
        $remain_lottery = $lottery->remain_lotteries - 1;
        $lottery->remain_lotteries =  $remain_lottery ;
        $lottery->update();
   

if ($buy_lottery) {
    return redirect()->to('/buy-lottery')->with('success',"Lottery Buy Successfuly, Please wait Admin Approvel!");
} else {
    return redirect()->back()->with('error',"Something Rong Tryagain Later!");
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
    
    
    return view('partner.total membars');
    
}


public function Commission()  {
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 1) {
        return redirect('/');
    }
    
    
    return view('partner.commision');
    
}





}

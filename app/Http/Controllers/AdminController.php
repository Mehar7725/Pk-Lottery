<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Contact;
use App\Models\Lottery;
use App\Models\User;
use App\Models\Winner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Dashboard() {
        return view('admin.index');
    }

    public function AddLottery() {
        return view('admin.add loutrey');
    }

    public function LotteryDetails() {
        $lotteries = Lottery::all();
        return view('admin.loutrey details', compact('lotteries'));
    }



    public function AddPartner() {
        return view('admin.add partner');
    }


    public function PartnerDetails() {
        $partners = User::where(['role'=>1])->get();
        return view('admin.partner details', compact('partners'));
    }


    public function LotteryApprovel() {
        return view('admin.lottery approval');
    }



    public function LotteryApprovedDetails() {
        return view('admin.lottery approved details');
    }




    public function AddWinner() {
        return view('admin.add winners');
    }




    public function WinnerDetails() {
        $winner = Winner::all();
        return view('admin.winners details', compact('winner'));
    }


    public function PartnerReDetails() {
        return view('admin.partner re details');
    }

    public function PartnerReCommission() {
        return view('admin.partner re commission');
    }


    public function CommissionDetailsUpdates() {
        return view('admin.commission details updates');
    }


    public function ContactMsges() {

        $msges = Contact::latest()->get();
        return view('admin.contact msg', compact('msges'));
    }


    public function ContactMsgDelete($id) {

        $msg = Contact::find($id);
        $msg->delete();
       return redirect()->back()->with('info',"Contact Msg Deleted");
    }



// Partner Functions Start ======================

    public function CreatePartner(Request $request) {
        $cnic = User::where(['cnic'=>$request->cnic])->first();
        if (!empty($cnic)) {
            return redirect()->back()->with('error',"This CNIC Number Already Registered!");
        }
        
            // Upload and save image
            if($request->hasfile('image')){
                $image = $request->image;
                $imageName =  $image->getClientOriginalName();
                $image->move(public_path().'/assets/partner/img', $imageName);
                $imageData = $imageName;

                $user = User::create([
                    'name'=> $request->name,
                    'father_name'=> $request->father_name,
                    'cnic'=> $request->cnic,
                    'dob'=> $request->dob,
                    'profile'=> $imageData,
                    'address'=> $request->address,
                    'password'=> $request->password,
                    'role'=> 1,
                ]);
              
        }else{
            $user = User::create([
                'name'=> $request->name,
                'father_name'=> $request->father_name,
                'cnic'=> $request->cnic,
                'dob'=> $request->dob,
                'address'=> $request->address,
                'password'=> $request->password,
                'role'=> 1,
            ]);
        }
        
  

        if ($user) {
            return redirect()->back()->with('success',"Partner Created Successfully!");
        }else{
            return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
        }
        
    }

    public function EditPartner($id)   {

        $partner = User::find($id);
        
        return view('admin.edit partner', compact('partner'));
        
        
    }

    public function UpdatePartner(Request $request)   {

        $partner = User::find($request->partner_id);
        
        if ($partner->cnic != $request->cnic) {
            $cnic = User::where('cnic','!=',$request->cnic)->first();
            if (!empty($cnic)) {
                return redirect()->back()->with('error',"New CNIC Number Entered Allready in Use!");
            }
            
        }
        if ($request->password != null) {
            $partner->password = $request->password;
        }


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

    }

    $partner->name = $request->name;
    $partner->father_name = $request->father_name;
    $partner->cnic = $request->cnic;
    $partner->dob = $request->dob;
    $partner->address = $request->address;
    $partner->update();
        
    if ($partner) {
        return redirect()->to('/partner-details')->with('success',"Partner Updates Successfully!");
    }else{
        return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
    }
    
        
    }


    public function DeletePartner($id)   {

        $partner = User::find($id);
        $partner->delete();
        return redirect()->back()->with('info',"Partner Delete!");
        
        
    }

// Partner Functions END ======================


// Lottery Functions Start ======================

public function CreateLottery(Request $request)   {

    $code = Lottery::where(['code'=>$request->code])->first();
    if (!empty($code)) {
        return redirect()->back()->with('error',"On This Code Lottery Allready Created!");
    }

    if($request->hasfile('image')){
        $image = $request->image;
        $imageName =  $image->getClientOriginalName();
        $image->move(public_path().'/assets/lottery/img', $imageName);
        $imageData = $imageName;

        $lottery = Lottery::create([
            'code'=>$request->code,
            'name'=>$request->name,
            'price'=>$request->price,
            'claim_date_time'=>$request->claim_time,
            'total_lotteries'=>$request->total_lotries,
            'remain_lotteries'=>$request->total_lotries,
            'partner_commission'=>$request->partner_commission,
            'image'=>$imageData,
        ]);

    }else{
        $lottery = Lottery::create([
            'code'=>$request->code,
            'name'=>$request->name,
            'price'=>$request->price,
            'claim_date_time'=>$request->claim_time,
            'total_lotteries'=>$request->total_lotries,
            'remain_lotteries'=>$request->total_lotries,
            'partner_commission'=>$request->partner_commission,
        ]);
    }

    if ($lottery) {
        return redirect()->back()->with('success',"Lottery Created Successfully!");
    }else{
        return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
    }

    
}


public function EditLottery($id)   {

    $lottery = Lottery::find($id);
    return view('admin.edit loutrey', compact('lottery'));
   
}

public function UpdateLottery(Request $request)   {

    $lottery = Lottery::find($request->lottery_id);

    if ($lottery->code != $request->code) {
        $code = Lottery::where('code','!=',$request->code)->first();
        if (!empty($code)) {
            return redirect()->back()->with('error',"New Lottery Code Entered Allready in Use!");
        }
        
    }
    $remain_lottery = $lottery->total_lotteries - $lottery->remain_lotteries ;
    if ($request->total_lotries < $remain_lottery) {
        return redirect()->back()->with('error',"Much Lottries Claimed, Entered Invalid Lotteries!");
        
    }

    if($request->hasFile('image'))
    {
        if ($lottery->image != null) {
            $path = public_path().'/assets/lottery/img'.$lottery->image;
        
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
                    $image->move(public_path().'/assets/lottery/img', $imageName);
                    $imageData = $imageName;
                  
            }
            $lottery->image = $imageData;

}
$new_remain = $request->total_lotries -  $remain_lottery ;

$lottery->code = $request->code;
$lottery->name = $request->name;
$lottery->price = $request->price;
$lottery->claim_date_time = $request->claim_time;
$lottery->total_lotteries = $request->total_lotries;
$lottery->remain_lotteries = $new_remain;
$lottery->partner_commission = $request->partner_commission;
$lottery->update();

if ($lottery) {
    return redirect()->to('/lottery-details')->with('success',"Lottery Updated Successfully!");
}else{
    return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
}

    
}

public function DeleteLottery($id)   {

    $lottery = Lottery::find($id);
    $lottery->delete();
    return redirect()->back()->with('info',"Lottery Delete!");
    
    
}

// Lottery Functions END ======================


// Winners Functions Start ======================

public function CreateWinner(Request $request)   {

    $code = Winner::where(['code'=>$request->code])->first();
    if (!empty($code)) {
        return redirect()->back()->with('error',"On This Code Lottery Winner Allready Created!");
    }

    if($request->hasfile('image')){
        $image = $request->image;
        $imageName =  $image->getClientOriginalName();
        $image->move(public_path().'/assets/winner/img', $imageName);
        $imageData = $imageName;

        $winner = Winner::create([
            'code'=>$request->code,
            'number'=>$request->number,
            'price'=>$request->price,
            'winner_name'=>$request->winner_name,
            'address'=>$request->address,
            'image'=>$imageData,
        ]);

    }else{
        $winner = Winner::create([
            'code'=>$request->code,
            'number'=>$request->number,
            'price'=>$request->price,
            'winner_name'=>$request->winner_name,
            'address'=>$request->address,
        ]);
    }

    if ($winner) {
        return redirect()->back()->with('success',"Lottery Winner Created Successfully!");
    }else{
        return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
    }

    
}




public function EditWinner($id)   {

    $winner = Winner::find($id);
    return view('admin.edit winner', compact('winner'));
   
}

public function UpdateWinner(Request $request)   {

    $winner = Winner::find($request->winner_id);

    if ($winner->code != $request->code) {
        $code = Winner::where('code','!=',$request->code)->first();
        if (!empty($code)) {
            return redirect()->back()->with('error',"New Lottery Winner Code Entered Allready in Use!");
        }
        
    }
  
    if($request->hasFile('image'))
    {
        if ($winner->image != null) {
            $path = public_path().'/assets/winner/img'.$winner->image;
        
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
                    $image->move(public_path().'/assets/winner/img', $imageName);
                    $imageData = $imageName;
                  
            }
            $winner->image = $imageData;

}

$winner->code = $request->code;
$winner->number = $request->number;
$winner->price = $request->price;
$winner->winner_name = $request->winner_name;
$winner->address = $request->address;
$winner->update();

if ($winner) {
    return redirect()->to('/winner-details')->with('success',"Lottery Winner Updated Successfully!");
}else{
    return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
}

    
}



public function DeleteWinner($id)   {

    $winner = Winner::find($id);
    $winner->delete();
    return redirect()->back()->with('info',"Lottery Winner Delete!");
    
    
}



// Winners Functions END ======================







}

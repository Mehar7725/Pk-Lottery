<?php

namespace App\Http\Controllers;

use App\Models\AccountDetail;
use App\Models\BuyLottery;
use App\Models\ClaimLottery;
use App\Models\CompanyDetail;
use Illuminate\Support\Facades\File;
use App\Models\Contact;
use App\Models\Lottery;
use App\Models\User;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function Dashboard() {

        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        

        $partner = User::where(['role'=>1])->count();
        $visiter = User::where(['role'=>0])->count();
        $winners = Winner::count();
        $lotteries = Lottery::count();
        return view('admin.index', compact('partner','visiter','winners','lotteries'));
    }

    public function AddLottery() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        return view('admin.add loutrey');
    }

    public function LotteryDetails() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        $lotteries = Lottery::latest()->get();
        return view('admin.loutrey details', compact('lotteries'));
    }



    public function AddPartner() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        

        return view('admin.add partner');
    }


    public function PartnerDetails() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        $partners = User::where(['role'=>1])->get();
        return view('admin.partner details', compact('partners'));
    }


    public function PartnerPendingLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>0])->latest()->get();
        $status = 0 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }



    public function PartnerApprovedLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>1])->latest()->get();
        $status = 1 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }



    public function PartnerClaimedLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>2])->latest()->get();
        $status = 2 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }



    public function PartnerClaimedPendingLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>3])->latest()->get();
        $status = 3 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }



    public function PartnerDeclineLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>4])->latest()->get();
        $status = 4 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }



    public function PartnerClaimDeclineLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = BuyLottery::where(['status'=>5])->latest()->get();
        $status = 5 ;
        return view('admin.partner-lottery', compact('lotteries', 'status'));
    }

    
    public function VisiterPendingLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = ClaimLottery::where(['status'=>0])->latest()->get();
        $status = 0 ;
        return view('admin.visiter-lottery', compact('lotteries', 'status'));
    }


    
    public function VisiterApprovedLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = ClaimLottery::where(['status'=>1])->latest()->get();
        $status = 1 ;
        return view('admin.visiter-lottery', compact('lotteries', 'status'));
    }



    
    public function VisiterDeclineLotteries() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $lotteries = ClaimLottery::where(['status'=>2])->latest()->get();
        $status = 2 ;
        return view('admin.visiter-lottery', compact('lotteries', 'status'));
    }




    public function LotteryApprovedDetails() {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        return view('admin.lottery approved details');
    }




    public function AddWinner() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        return view('admin.add winners');
    }




    public function WinnerDetails() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        $winner = Winner::all();
        return view('admin.winners details', compact('winner'));
    }



    public function AddAccountDetail() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        
        return view('admin.add-account-details' );
    }



    public function AccountDetails() {
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        $account = AccountDetail::latest()->get();
        return view('admin.account details', compact('account') );
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

        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        

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
        
        if (!Auth::user()) {
            return redirect('/login');
        }

        if (Auth::user()->role != 2) {
            return redirect('/');
        }
        

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
    
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 2) {
        return redirect('/');
    }
    

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
    $buy_lottery = BuyLottery::where(['lottery_id'=>$lottery->id, 'status'=>0])->get();
    if (!empty($buy_lottery)) {
        foreach ($buy_lottery as $key => $value) {
            $value->price = $request->price ;
            $value->claim_date_time = $request->claim_time ;
            $value->update();
        }
    }
    $buy_lottery = BuyLottery::where(['lottery_id'=>$lottery->id, 'status'=>1])->get();
    if (!empty($buy_lottery)) {
        foreach ($buy_lottery as $key => $value) {
            $value->price = $request->price ;
            $value->claim_date_time = $request->claim_time ;
            $value->update();
        }
    }
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
    
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 2) {
        return redirect('/');
    }
    

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
// Company Details Functions Start ======================
public function CompanyDetails()   {
      
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 2) {
        return redirect('/');
    }
    
    $company_detail = CompanyDetail::first();
    return view('admin.company details', compact('company_detail'));
}
public function UpdateCompanyDetails(Request $request)   {
      
    if (!Auth::user()) {
        return redirect('/login');
    }

    if (Auth::user()->role != 2) {
        return redirect('/');
    }
    
    $company_detail = CompanyDetail::first();
    
    
    
    if (!empty($company_detail)) {
        if($request->hasFile('logo_image')  || $request->hasFile('add_image'))
        {
            if ($request->logo_image != null) {
                if ($company_detail->logo != null) {
                    $path = public_path().'/assets/company/img'.$company_detail->logo;
                
                    if(File::exists($path))
                    {
                        File::delete($path);
                    }
        
                }
             
                // Upload and Store Images
                 // Upload and save image
                        if($request->hasfile('logo_image')){
                            $image = $request->logo_image;
                            $imageName =  $image->getClientOriginalName();
                            $image->move(public_path().'/assets/company/img', $imageName);
                            $imageData_logo = $imageName;
                          
                    }
                    $company_detail->logo = $imageData_logo;
            }
            if ($request->add_image != null) {
                if ($company_detail->add != null) {
                    $path = public_path().'/assets/company/img'.$company_detail->add;
                
                    if(File::exists($path))
                    {
                        File::delete($path);
                    }
        
                }
             
                // Upload and Store Images
                 // Upload and save image
                        if($request->hasfile('add_image')){
                            $image = $request->add_image;
                            $imageName =  $image->getClientOriginalName();
                            $image->move(public_path().'/assets/company/img', $imageName);
                            $imageData_add = $imageName;
                          
                    }
                    $company_detail->add = $imageData_add;
            }
       
    
    }
    
    $company_detail->facebook = $request->facebook;
    $company_detail->instagram = $request->instagram;
    $company_detail->whatsapp = $request->whatsapp;
    $company_detail->update();
    }else{


        if($request->hasFile('logo_image') || $request->hasFile('add_image'))
        {
            
          
                 // Upload and save image
                        if($request->hasfile('logo_image')){
                            $image_logo = $request->logo_image;
                            $imageName_logo =  $image_logo->getClientOriginalName();
                            $image_logo->move(public_path().'/assets/company/img', $imageName_logo);
                            $imageData_logo = $imageName_logo;
                          
                    }
           
           
              
                 // Upload and save image
                        if($request->hasfile('add_image')){
                            $image_add = $request->add_image;
                            $imageName_add =  $image_add->getClientOriginalName();
                            $image_add->move(public_path().'/assets/company/img', $imageName_add);
                            $imageData_add = $imageName_add;
                          
                    }
           

            $company_detail = CompanyDetail::create([
                'logo'=>$imageData_logo,
                'add'=>$imageData_add,
                'facebook'=>$request->facebook,
                'instagram'=>$request->instagram,
                'whatsapp'=>$request->whatsapp,
            ]);
       
    
    }else{

           $company_detail = CompanyDetail::create([
        'facebook'=>$request->facebook,
        'instagram'=>$request->instagram,
        'whatsapp'=>$request->whatsapp,
    ]);
    }

 


    }
  
    
if ($company_detail) {
    return redirect()->back()->with('success',"Company Details Updated Successfully!");
}else{
    return redirect()->back()->with('error',"SomeThing Rong, Try Again!");
}

}
// Company Details Functions END ======================
// Partner Lottery Functions start ======================
public function PartnerLotteryApprove($id)  {
    
    $lottery = BuyLottery::find($id);
    $lottery->status = 1;
    $lottery->update();
    return redirect()->back()->with('success', "Partner Lottery Approved");
}
public function PartnerLotteryDecline($id)  {
    
    $lottery = BuyLottery::find($id);
    $lottery->status = 4;
    $lottery->update();
    return redirect()->back()->with('info', "Partner Lottery Declined");
}
public function PartnerLotteryDelete($id)  {
    
    $lottery = BuyLottery::find($id);
    $lottery->delete();
    return redirect()->back()->with('info', "Partner Lottery Deleted");
}
// Partner Lottery Functions END ======================


// Visiter Lottery Functions start ======================
public function VisiterLotteryApprove($id)  {
    
    $lottery = ClaimLottery::find($id);
    $lottery->status = 1;
    $buy_lottery = BuyLottery::find($lottery->buy_id);
    $buy_lottery->status = 2;
    $buy_lottery->update();
    $lottery->update();
    return redirect()->back()->with('success', "Visiter Lottery Approved");
}
public function VisiterLotteryDecline($id)  {
    
    $lottery = ClaimLottery::find($id);
    $lottery->status = 2;
    $buy_lottery = BuyLottery::find($lottery->buy_id);
    $buy_lottery->status = 5;
    $buy_lottery->update();
    $lottery->update();
    return redirect()->back()->with('info', "Visiter Lottery Declined");
}
public function VisiterLotteryDelete($id)  {
    
    $lottery = ClaimLottery::find($id);
    $lottery->delete();
    return redirect()->back()->with('info', "Visiter Lottery Deleted");
}
// Visiter Lottery Functions END ======================
// Account Details  Functions Start ======================
public function CreateAccountDetail(Request $request)   {
    $get_account = AccountDetail::where(['account_name'=>$request->account_name,'account_number'=>$request->account_number])->first();
    if (!empty($get_account)) {
        return redirect()->back()->with('error', "This Account Number Allready Added!");
    }

    $account = AccountDetail::create([
        'account_name'=>$request->account_name,
        'holder_name'=>$request->holder_name,
        'account_number'=>$request->account_number,
    ]);

    if ($account) {
        return redirect()->back()->with('success', "Account Created Successfuly!");
    } else {
        return redirect()->back()->with('error', "Something Rong, Tryagain Latter!");
    }
    
}

public function EditAccountDetail($id)   {
    $account = AccountDetail::find($id);

    return view('admin.edit-account-details', compact('account'));
}

public function UpdateAccountDetail(Request $request)  {
    
    $account = AccountDetail::find($request->account_id);
  if ($request->account_number != $account->account_number || $request->account_name != $account->account_name) {
    $account_get = AccountDetail::where('id','!=',$request->account_id)->where('account_name','=',$request->account_name)->where('account_number','=',$request->account_number)->first();
    if (!empty($account_get)) {
        return redirect()->back()->with('error', "This Account Numbler Allready in Use!");
    }
  }

  $account->account_name = $request->account_name;
  $account->holder_name = $request->holder_name;
  $account->account_number = $request->account_number;
  $account->update();
  if ($account) {
    return redirect()->to('/account-details')->with('success', "Account Created Successfuly!");
} else {
    return redirect()->back()->with('error', "Something Rong, Tryagain Latter!");
}
  
}

public function DeleteAccountDetail($id)   {
    $account = AccountDetail::find($id);
    $account->delete();
    return redirect()->back()->with('info', "Account Deleted Successfuly!");
}
// Account Details  Functions END ======================









}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Contact;
use App\Models\User;
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
        return view('admin.loutrey details');
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
        return view('admin.winners details');
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




}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        return view('admin.partner details');
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





}

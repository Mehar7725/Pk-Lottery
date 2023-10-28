<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VisiterController extends Controller
{
    //
    public function Home()  {
        if (Auth::user()) {
            if (Auth::user()->role != 0) {
               return redirect()->to('partner');
            }
        }
        return view('visitor.home');
    }

    public function Winners()  {
        $winners = Winner::all();
        return view('visitor.lotterywinners', compact('winners'));
    }


    public function FindLottery()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        return view('visitor.findlottery');
    }

    public function OurLottery()  {
        if (!Auth::user()) {
            return redirect('/login');
        }

        return view('visitor.ourlottery');
    }

    public function ShippingDetails()  {
        return view('visitor.shippingdetail');
    }

    public function ContactUs()  {
        return view('visitor.contactus');
    }








}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiterController extends Controller
{
    //
    public function Home()  {
        return view('visitor.home');
    }

    public function Winners()  {
        return view('visitor.lotterywinners');
    }


    public function FindLottery()  {
        return view('visitor.findlottery');
    }

    public function OurLottery()  {
        return view('visitor.ourlottery');
    }

    public function ShippingDetails()  {
        return view('visitor.shippingdetail');
    }

    public function ContactUs()  {
        return view('visitor.contactus');
    }








}

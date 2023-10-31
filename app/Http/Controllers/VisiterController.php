<?php

namespace App\Http\Controllers;

use App\Models\BuyLottery;
use App\Models\CompanyDetail;
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

    public function ShippingDetails()  {
        if (!Auth::user()) {
            return redirect('/login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->to('partner');
         }
         if (Auth::user()->role == 2) {
            return redirect()->to('admin-dashboard');
         }
         
        return view('visitor.shippingdetail');
    }

    public function ContactUs()  {
        return view('visitor.contactus');
    }








}

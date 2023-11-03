<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyLottery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'father_name',
        'cnic',
        'lottery_code',
        'lottery_id',
        'lottery_name',
        'lottery_image',
        'reffral_id',
        'reffral_name',
        'reffral_cnic',
        'dob',
        'transaction_image',
        'transaction_id',
        'address',
        'price',
        'claim_date_time',
        'partner_commission',
        'status',
        'payment_type',
    ];
}

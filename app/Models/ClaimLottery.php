<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimLottery extends Model
{
    use HasFactory;
    protected $fillable = [
        'buy_id',
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
        'status',
        'payment_type',
    ];
}

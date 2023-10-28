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
        'reffral_id',
        'reffral_name',
        'dob',
        'cnic_front',
        'cnic_back',
        'transaction_image',
        'transaction_id',
        'address',
        'price',
        'status',
    ];
}

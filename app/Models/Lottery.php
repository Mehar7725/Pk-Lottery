<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'price',
        'image',
        'claim_date_time',
        'total_lotteries',
        'remain_lotteries',
        'partner_commission',
        'shipping_fee',
    ];
}

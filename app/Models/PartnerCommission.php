<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerCommission extends Model
{
    use HasFactory;
    protected $fillable = [
        'partner_id',
        'date',
        'name',
        'father_name',
        'cnic',
        'dob',
        'address',
        'lottery_code',
        'lottery_name',
        'commission',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralUser extends Model
{
    use HasFactory;
    protected $table="referralusers";
    protected $fillable = [
        'ref_id',
        'user_id',
    ];
}

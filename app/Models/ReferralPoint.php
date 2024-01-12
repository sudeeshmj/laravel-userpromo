<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralPoint extends Model
{
    use HasFactory;
    protected $table ="referralpoints";
    protected $primaryKey ="level";
    protected $fillable = ['points'];
}

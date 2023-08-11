<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialProjection extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $guarded=['id'];

    public function master(){
        return $this->hasOne(FinancialProjectionMaster::class,'id','master_id');
    }
}

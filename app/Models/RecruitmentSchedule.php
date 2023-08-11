<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecruitmentSchedule extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    use SoftDeletes;

    public function master(){
        return $this->hasOne(RecruitmentScheduleMaster::class,'id','master_id');
    }
}

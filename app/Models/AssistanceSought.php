<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssistanceSought extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=['id'];

    public function master(){
        return $this->hasOne(AssistanceSoughtMaster::class,'id','type_id',);
    }
}

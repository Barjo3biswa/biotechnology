<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StartUpAssistanceSought extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    use SoftDeletes;

    public function master(){
        return $this->hasOne(AssistanceSoughtMaster::class,'id','type_id',);
    }
}

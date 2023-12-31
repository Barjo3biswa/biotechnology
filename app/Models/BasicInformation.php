<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasicInformation extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    use SoftDeletes;

    public function EntityType(){
        return $this->hasOne(EntityType::class,'id','entity_type');
    }
}

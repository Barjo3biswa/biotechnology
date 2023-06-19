<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    use SoftDeletes;

    public function BasicInformation(){
        return $this->hasOne(BasicInformation::class,'application_id','id');
    }
    public function DetailsBTPark(){
        return $this->hasOne(BtParkDetail::class,'application_id','id');
    }
    public function ProjectCoast(){
        return $this->hasMany(ProjectCoast::class,'application_id','id');
    }
    public function MeansOfFinancing(){
        return $this->hasOne(MeansOfFinancing::class,'application_id','id');
    }
    // public function BasicInformation(){
    //     return $this->hasOne(BasicInformation::class,'application_id','id');
    // }
    public function BankACDetails(){
        return $this->hasOne(BankAccountDetail::class,'application_id','id');
    }
}

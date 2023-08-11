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

    public function BankACDetails(){
        return $this->hasOne(BankAccountDetail::class,'application_id','id');
    }

    public function Directors(){
        return $this->hasMany(DirectorsPromoter::class,'application_id','id');
    }

    public function AssistanceSought(){
        return $this->hasMany(AssistanceSought::class,'application_id','id');
    }

    public function BTUnitDetails(){
        return $this->hasOne(BTUnitDetails::class,'application_id','id');
    }

    public function RecruitmentSchedule(){
        return $this->hasMany(RecruitmentSchedule::class,'application_id','id');
    }

    public function UndertakingExpansion(){
        return $this->hasOne(UndertakingExpansion::class,'application_id','id');
    }

    public function FinancialProjection(){
        return $this->hasMany(FinancialProjection::class,'application_id','id');
    }

    public function startUps(){
        return $this->hasOne(StartUp::class,'application_id','id');
    }

    public function incubation(){
        return $this->hasOne(IncubatorDetail::class,'application_id','id');
    }

    public function incubationSchedule(){
        return $this->hasMany(IncubationDevelopmentSchedule::class,'application_id','id');
    }

    public function applicationType(){
        return $this->hasOne(applicationType::class,'name','application_type');
    }
}

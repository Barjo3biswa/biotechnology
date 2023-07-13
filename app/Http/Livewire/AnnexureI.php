<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\AssistanceSought;
use App\Models\AssistanceSoughtMaster;
use App\Models\BankAccountDetail;
use App\Models\BasicInformation;
use App\Models\BtParkDetail;
use App\Models\BTUnitDetails;
use App\Models\DirectorsPromoter;
use App\Models\EntityType;
use App\Models\FinancialProjection as ModelsFinancialProjection;
use App\Models\FinancialProjectionMaster;
use App\Models\MeansOfFinancing;
use App\Models\ProjectCoast;
use App\Models\RecruitmentSchedule;
use App\Models\RecruitmentScheduleMaster;
use App\Models\UndertakingExpansion;
use Database\Seeders\FinancialProjection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnnexureI extends Component
{

    use WithFileUploads;
    public $application_id;

    public $app_list=1, $step="AnnexureIA", $sub_step,$success,$error,$success_msg,$error_msg,$application,$application_list;

    // database value form value
    public $entity_types;

    // Basic Information data
    public $dsir_reg_status;
    public $unit_name, $phone_no, $telephone_no, $email, $entity_type, $pan_no, $gst_no, $dsr_csr_status, $dsr_csr_reg_no;
    public $director_details;
    public $certificate_of_incorporation, $pan_coppyii, $registration_coppy;

    // BT PARK / R&D INSTITUTE / FINISHING SCHOOL
    public $location, $area_of_land, $proff_of_land, $description, $project_report, $noc_certificate;



    //Means Of Financing
    public $tot_coast, $promoters_contribution, $enterprise_contribution, $expect_from_ass_gov, $expect_from_oth_gov, $loan_selection_letter, $total;

    //Bank Account Details
    public $ac_hol_name, $bank_name, $account_number, $ifsc_code, $rtgs_dts;

    //Assistance sought
    public $assistance_sought,$assistance_sought_values;

    //Annexure IB
    public $recruitment_master, $recruitment_schedule, $financial_projection;
    public $unit_expansion, $location_ib, $office_space, $proff_of_land_doc, $description_ib, $noc_ib, $report_ib;
    public $no_of_employee, $annual_epf, $electricity_consupt, $current_area, $year_i, $year_ii, $year_iii, $vat_year_i, $vat_year_ii, $vat_year_iii;
    public $financial_projections;
    public function render()
    {
        // dd("ok");
        $this->entity_types=EntityType::get();
        $this->application_list=Application::where('user_id',Auth::user()->id)->get();
        $this->assistance_sought = AssistanceSoughtMaster::get();
        $this->recruitment_master = RecruitmentScheduleMaster::get();
        $this->financial_projection = FinancialProjectionMaster::get();
        // dd($this->financial_projection);
        return view('livewire.annexure-i');
    }

    public function applicationStep($status){
        // dd("ok");
        if($status=='apply'){
            $this->edit_load = null;
            $this->sub_step=null;
            $this->app_list=0;
        }else{
            $this->app_list=1;
        }
    }
    public function formStep($IpStep){
        $this->sub_step=null;
        $this->step=$IpStep;
    }

    public function formSubStep($IpSubStep){
        if($IpSubStep==$this->sub_step){
            $this->sub_step=null;
        }else{
            $this->sub_step=$IpSubStep;
        }
    }


    public $coast_count=1,$project_coast,$coast_array=[],$director_count=1,$director_array=[];
    public function Increment($test){
        if($test=="director_count"){
           array_push($this->director_array ,$this->director_count++);
        }
        if($test=="coast_count"){
            array_push($this->coast_array ,$this->coast_count++);
            // $this->coast_count++;
        }
    }

    public function Decrement($test,$i){
        if($test=="director_count"){
            unset($this->director_array[$i]);
        }
        if($test=="coast_count"){
            $this->coast_count++;
        }
    }
    public $edit_load=null;
    public function editLoad($id){
        $application=Application::where('id',$id)->first();
        $this->edit_load = $application->application_type;
        $this->step = $application->application_type;
        $this->application_id = $id;
        $this->director_count=1;
        // $this->dsir_reg_status = $application->;
        $this->unit_name = $application->BasicInformation->unit_name??Null;
        $this->phone_no = $application->BasicInformation->phone_no??Null;
        $this->telephone_no = $application->BasicInformation->telephone_no??Null;
        $this->email = $application->BasicInformation->email??Null;
        $this->entity_type = $application->BasicInformation->entity_type??Null;
        $this->pan_no = $application->BasicInformation->pan_no??Null;
        $this->gst_no = $application->BasicInformation->gst_no??Null;
        $this->dsir_reg_status = $application->BasicInformation->dsr_csr_status??Null;
        $this->dsr_csr_reg_no = $application->BasicInformation->dsr_csr_reg_no??Null;

        $this->director_details=[];
        $this->director_array=[];
        foreach($application->Directors as $key=> $direc){
            array_push($this->director_array ,$this->director_count++);
            $data=[
                'dir_id'     => $direc->id,
                'dir_name'   => $direc->name,
                'din_pan_no' => $direc->din_pan_no,
                'dir_email'  => $direc->email,
                'dir_cont'   => $direc->contact_no,
                'dir_add'    => $direc->address,
            ];
            $this->director_details[] = $data;
        }

        foreach($application->ProjectCoast as $key=>$cost){
            array_push($this->coast_array ,$this->coast_count++);
            $data=[
                'id'             => $cost->id,
                'component_name' => $cost->component_name,
                'coast'          => $cost->coast,
            ];
            $this->project_coast[] = $data;
        }


        foreach($application->AssistanceSought as $key=>$sought){
            $data=[
                'id'     => $sought->id,
                'amount' => $sought->amount,
                'remarks'=> $sought->remarks,
            ];
            $this->assistance_sought_values[++$key] = $data;
        }
        // dd($this->assistance_sought_values);
        $this->location = $application->DetailsBTPark->location??Null;
        $this->area_of_land = $application->DetailsBTPark->area_of_land??Null;
        $this->proff_of_land = $application->DetailsBTPark->proff_of_land??Null;
        $this->description = $application->DetailsBTPark->description??Null;
        $this->project_report = $application->DetailsBTPark->project_report??Null;
        $this->noc_certificate = $application->DetailsBTPark->noc_certificate??Null;

        // $this->component = $application->ProjectCoast->component_name??Null;
        // $this->coast = $application->ProjectCoast->coast??Null;
        // $this->project_coast=$application->ProjectCoast??Null;
        // dd($this->project_coast);??Null

        $this->tot_coast = $application->MeansOfFinancing->tot_coast??Null;
        $this->promoters_contribution = $application->MeansOfFinancing->promoters_contribution??Null;
        $this->enterprise_contribution = $application->MeansOfFinancing->enterprise_contribution??Null;
        $this->expect_from_ass_gov = $application->MeansOfFinancing->expect_from_ass_gov??Null;
        $this->expect_from_oth_gov = $application->MeansOfFinancing->expect_from_oth_gov??Null;
        $this->loan_selection_letter = $application->MeansOfFinancing->loan_selection_letter??Null;
        $this->total = $application->MeansOfFinancing->total??Null;

        $this->ac_hol_name = $application->BankACDetails->ac_hol_name??Null;
        $this->bank_name = $application->BankACDetails->bank_name??Null;
        $this->account_number = $application->BankACDetails->account_number??Null;
        $this->ifsc_code = $application->BankACDetails->ifsc_code??Null;
        $this->rtgs_dts = $application->BankACDetails->rtgs_dts??Null;

        $this->app_list=0;
    }

    // public function getApplicationType(){

    // }

    public function saveBasicInfo(){
        // dd($this->director_details);
        $this->validate([
            'unit_name'=> 'required',
            'phone_no'=> 'required|digits:10',
            'telephone_no'=> 'required|digits:10',
            'email'=> 'required|email',
            'entity_type'=> 'required',
            'pan_no'=> 'required|size:10',
            'gst_no'=> 'required',
            'dsir_reg_status'=> 'required',
            'dsr_csr_reg_no'=> 'requiredIf:dsir_reg_status,1',
        ]);

        try{
            DB::beginTransaction();
            if($this->application_id==null){
                $this->application=Application::create([
                    'user_id' => Auth::user()->id,
                    'application_type' => $this->step,
                    'basic_info' => 1,
                    'application_status' => 'created',
                ]);
                $this->application_id = $this->application->id;
            }
            BasicInformation::updateOrcreate(
                [ 'application_id' => $this->application_id ],
                [
                    'application_id' => $this->application_id,
                    'application_type' => 'AnnexureIA',
                    'unit_name'=> $this->unit_name,
                    'phone_no'=> $this->phone_no,
                    'telephone_no'=> $this->telephone_no,
                    'email'=> $this->email,
                    'entity_type'=> $this->entity_type,
                    'pan_no'=> $this->pan_no,
                    'gst_no'=> $this->gst_no,
                    'dsr_csr_status'=> $this->dsir_reg_status,
                    'dsr_csr_reg_no'=> $this->dsr_csr_reg_no,
                    'certificate_of_incorporation'=> $this->storeDocs($this->certificate_of_incorporation,'certificate_of_incorporation'),
                    'pan_coppy'=> $this->storeDocs($this->pan_coppyii,'pan_coppyii'),
                    'registration_coppy'=> $this->storeDocs($this->registration_coppy,'registration_coppy'),
                ]);
                if($this->director_details){
                    foreach($this->director_details as $details){
                        DirectorsPromoter::updateOrcreate(
                            [ 'id' => $details['dir_id']??0 ],
                            [
                            'application_id' => $this->application_id,
                            'name' => $details['dir_name'],
                            'din_pan_no' => $details['din_pan_no'],
                            'email' => $details['dir_email'],
                            'contact_no' => $details['dir_cont'],
                            'address' => $details['dir_add'],
                        ]);
                    }
                }

            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Basic Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }

    }

    public function saveDetailsBTPark(){
        $this->validate([
            'location' =>'required',
            'area_of_land' =>'required',
            'proff_of_land' =>'required',
            'description' =>'required',
            'project_report' =>'required',
            'noc_certificate' =>'required',
        ]);

        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['details'=>1]);
            BtParkDetail::updateOrcreate(
                [ 'application_id' => $this->application_id ],[
                    'application_id' => $this->application_id,
                    'location' => $this->location,
                    'area_of_land' => $this->area_of_land,
                    'proff_of_land' => $this->storeDocs($this->proff_of_land,'proff_of_land'),
                    'description' => $this->description,
                    'project_report' => $this->storeDocs($this->project_report,'project_report'),
                    'noc_certificate' =>  $this->storeDocs($this->noc_certificate,'noc_certificate'),
                ]);
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Basic Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }

    public function saveProjectCoast(){
        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['coast'=>1]);
            foreach($this->project_coast as $key=>$pc){
                ProjectCoast::updateOrcreate(
                    [ 'id' => $pc['id']??0],
                    [
                    'application_id' => $this->application_id,
                    'component_name' => $pc['component_name'],
                    'coast'     => $pc['coast'],
                ]);
            }
            $this->project_coast=null;
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Project Coat Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }

    public function saveFinancing(){
        $this->validate([
            'tot_coast'   => 'required',
            'promoters_contribution' => 'required',
            'enterprise_contribution'  => 'required',
            'expect_from_ass_gov'  => 'required',
            'expect_from_oth_gov'  => 'required',
            'loan_selection_letter' => 'required',
            'total' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['financing'=>1]);
            MeansOfFinancing::updateOrcreate(
                [ 'application_id' => $this->application_id ],[
                'application_id' => $this->application_id,
                'tot_coast'   => $this->tot_coast,
                'promoters_contribution' => $this->promoters_contribution,
                'enterprise_contribution'  => $this->enterprise_contribution,
                'expect_from_ass_gov'  => $this->expect_from_ass_gov,
                'expect_from_oth_gov'  => $this->expect_from_oth_gov,
                'loan_selection_letter' => $this->storeDocs($this->loan_selection_letter,'loan_selection_letter'),
                'total' => $this->total,
            ]);
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Basic Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }

    }

    public function saveBankDetails(){
        $this->validate([
            'ac_hol_name'=> 'required',
            'bank_name'=> 'required',
            'account_number'=> 'required',
            'ifsc_code'=> 'required',
            'rtgs_dts'=> 'required',
        ]);

        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['bank'=>1]);
            BankAccountDetail::updateOrcreate(
                [ 'application_id' => $this->application_id ],[
                'application_id' => $this->application_id,
                'ac_hol_name'=> $this->ac_hol_name,
                'bank_name'=> $this->bank_name,
                'account_number'=> $this->account_number,
                'ifsc_code'=> $this->ifsc_code,
                'rtgs_dts'=> $this->rtgs_dts,
            ]);
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Basic Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }

    public function saveAssistanceSought(){
        // dd($this->assistance_sought_values);
        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['scheme'=>1]);
            foreach($this->assistance_sought_values as $id=>$sought){
                AssistanceSought::updateOrcreate(
                    [ 'id' => $sought['id'] ],[
                    'application_id' =>	$this->application_id,
                    'type_id' => $id,
                    'amount' => $sought['amount'],
                    'remarks' => $sought['remarks'],
                    'status'  =>1,
                ]);
            }
            $this->project_coast=null;
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Assistance Sought under the scheme Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }
    public function storeDocs($file,$file_name)
    {
        $file_name = date('YmdHis') . "_" . rand(4512, 6859) . $file_name .'.'. $file->getClientOriginalExtension();
        return $file->storeAs('Uploads',$file_name,'public');
    }

    public function saveDetailsBTParkIB(){

        DB::beginTransaction();
        try{
            BTUnitDetails::create([
                'application_id' =>	$this->application_id,
                'unit_expansion' => $this->unit_expansion,
                'location_ib' => $this->location_ib,
                'office_space' => $this->office_space,
                'proff_of_land_doc' => $this->proff_of_land_doc,
                'description_ib' => $this->description_ib,
                'noc_ib' => $this->noc_ib,
                'report_ib' => $this->report_ib,
            ]);
            foreach($this->recruitment_schedule as $key=>$schedule){
                RecruitmentSchedule::create([
                    'application_id' =>	$this->application_id,
                    'master_id' => $key,
                    'year_i' => $schedule['year_i'],
                    'year_ii' => $schedule['year_ii'],
                    'year_iii' => $schedule['year_iii'],
                    'year_iv' => $schedule['year_iv'],
                    'year_v' => $schedule['year_v'],
                ]);
            }
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Details of Eligible BT Unit Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }

    public function saveDetailsBTUndertakingIB(){
        DB::beginTransaction();
        try{
            UndertakingExpansion::create([
                'application_id' =>	$this->application_id,
                'no_of_employee'=>$this->no_of_employee,
                'annual_epf'=>$this->annual_epf,
                'electricity_consupt'=>$this->electricity_consupt,
                'current_area'=>$this->current_area,
                'year_i'=>$this->year_i,
                'year_ii'=>$this->year_ii,
                'year_iii'=>$this->year_iii,
                'vat_year_i'=>$this->vat_year_i,
                'vat_year_ii'=>$this->vat_year_ii,
                'vat_year_iii'=>$this->vat_year_iii,
            ]);
            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Details of Eligible BT Unit Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            // dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }

    public function saveFinancialProjection(){
        DB::beginTransaction();
        try{
            foreach($this->financial_projections as $key=>$val){
                ModelsFinancialProjection::create([
                    'application_id'=>$this->application_id,
                    'master_id' => $key,
                    'year_i' => $val['year_i'],
                    'year_ii' => $val['year_ii'],
                    'year_iii' => $val['year_iii'],
                    'year_iv' => $val['year_iv'],
                    'year_v' => $val['year_v'],
                ]);
            }

            DB::commit();
            $this->error=0;$this->success=1;
            $this->success_msg="Successfully Inserted Details of Eligible BT Unit Information.";
            $this->sub_step=null;
        }catch(\Exception $e){
            // dd($e);
            DB::rollback();
            $this->error=1;$this->success=0;
            $this->error_msg="Something Went Wrong, please try again.";
        }
    }


}

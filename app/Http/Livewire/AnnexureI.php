<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\AssistanceSought;
use App\Models\AssistanceSoughtMaster;
use App\Models\BankAccountDetail;
use App\Models\BasicInformation;
use App\Models\BtParkDetail;
use App\Models\DirectorsPromoter;
use App\Models\EntityType;
use App\Models\MeansOfFinancing;
use App\Models\ProjectCoast;
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
    public $dsir_reg_status,$director_count=1,$director_array=[];
    public $unit_name, $phone_no, $telephone_no, $email, $entity_type, $pan_no, $gst_no, $dsr_csr_status, $dsr_csr_reg_no;
    public $director_details;
    public $certificate_of_incorporation, $pan_coppyii, $registration_coppy;

    // BT PARK / R&D INSTITUTE / FINISHING SCHOOL
    public $location, $area_of_land, $proff_of_land, $description, $project_report, $noc_certificate;

    //project Coast
    public $coast_count=1,$project_coast;

    //Means Of Financing
    public $tot_coast, $promoters_contribution, $enterprise_contribution, $expect_from_ass_gov, $expect_from_oth_gov, $loan_selection_letter, $total;

    //Bank Account Details
    public $ac_hol_name, $bank_name, $account_number, $ifsc_code, $rtgs_dts;

    //Assistance sought
    public $assistance_sought,$assistance_sought_values;

    public function render()
    {
        // dd("ok");
        $this->entity_types=EntityType::get();
        $this->application_list=Application::where('user_id',Auth::user()->id)->get();
        $this->assistance_sought = AssistanceSoughtMaster::get();
        return view('livewire.annexure-i');
    }

    public function testThis(){
        dd("ok");
    }
    public function applicationStep($status){
        // dd("ok");
        if($status=='apply'){
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

    public function Increment($test){
        if($test=="director_count"){
           array_push($this->director_array ,$this->director_count++);
        }
        if($test=="coast_count"){
            $this->coast_count++;
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

    public function editLoad($id){
        $application=Application::where('id',$id)->first();
        $this->application_id = $id;
        $this->director_count=1;
        // $this->dsir_reg_status = $application->;
        $this->unit_name = $application->BasicInformation->unit_name;
        $this->phone_no = $application->BasicInformation->phone_no;
        $this->telephone_no = $application->BasicInformation->telephone_no;
        $this->email = $application->BasicInformation->email;
        $this->entity_type = $application->BasicInformation->entity_type;
        $this->pan_no = $application->BasicInformation->pan_no;
        $this->gst_no = $application->BasicInformation->gst_no;
        $this->dsir_reg_status = $application->BasicInformation->dsr_csr_status;
        $this->dsr_csr_reg_no = $application->BasicInformation->dsr_csr_reg_no;

        // $this->dir_name = $application->;
        // $this->dir_pan = $application->;
        // $this->dir_email = $application->;
        // $this->dir_cont = $application->;
        // $this->dir_add = $application->;

        $this->location = $application->DetailsBTPark->location;
        $this->area_of_land = $application->DetailsBTPark->area_of_land;
        $this->proff_of_land = $application->DetailsBTPark->proff_of_land;
        $this->description = $application->DetailsBTPark->description;
        $this->project_report = $application->DetailsBTPark->project_report;
        $this->noc_certificate = $application->DetailsBTPark->noc_certificate;

        // $this->component = $application->ProjectCoast->component_name;
        // $this->coast = $application->ProjectCoast->coast;
        // $this->project_coast=$application->ProjectCoast;
        // dd($this->project_coast);

        $this->tot_coast = $application->MeansOfFinancing->tot_coast;
        $this->promoters_contribution = $application->MeansOfFinancing->promoters_contribution;
        $this->enterprise_contribution = $application->MeansOfFinancing->enterprise_contribution;
        $this->expect_from_ass_gov = $application->MeansOfFinancing->expect_from_ass_gov;
        $this->expect_from_oth_gov = $application->MeansOfFinancing->expect_from_oth_gov;
        $this->loan_selection_letter = $application->MeansOfFinancing->loan_selection_letter;
        $this->total = $application->MeansOfFinancing->total;

        $this->ac_hol_name = $application->BankACDetails->ac_hol_name;
        $this->bank_name = $application->BankACDetails->bank_name;
        $this->account_number = $application->BankACDetails->account_number;
        $this->ifsc_code = $application->BankACDetails->ifsc_code;
        $this->rtgs_dts = $application->BankACDetails->rtgs_dts;

        $this->app_list=0;
    }

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
                    'application_type' => 'AnnexureIA',
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
                    'pan_coppyii'=> $this->storeDocs($this->pan_coppyii,'pan_coppyii'),
                    'registration_coppy'=> $this->storeDocs($this->registration_coppy,'registration_coppy'),
                ]);
                if(count($this->director_details)>0){
                    foreach($this->director_details as $details){
                        DirectorsPromoter::create([
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
        //  dd($this->project_coast);
        // $this->validate([
        //     'project_coast.*.component_name' =>'required',
        //     'project_coast.*.coast' =>'required',
        // ]);

        DB::beginTransaction();
        try{
            // dd($this->project_coast);
            Application::where('id',$this->application_id)->update(['coast'=>1]);
            foreach($this->project_coast as $key=>$pc){
                ProjectCoast::updateOrcreate(
                    [ 'application_id' => $key/* $this->application_id */ ],
                    [
                    'application_id' => $this->application_id,
                    'component_name' => $pc['component_name'],
                    'coast'     => $pc['coast'],
                ]);
            }
            // dd("ok");
            // ProjectCoast::updateOrcreate(
            //     [ 'application_id' => $this->application_id ],
            //     [
            //     'application_id' => 1,
            //     'component_name' => $this->component,
            //     'coast'     => $this->coast,
            // ]);
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
        DB::beginTransaction();
        try{
            Application::where('id',$this->application_id)->update(['scheme'=>1]);
            foreach($this->assistance_sought_values as $id=>$sought){
                AssistanceSought::create([
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


}

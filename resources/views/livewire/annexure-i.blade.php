<section class="pt-30">
@if($app_list==1)
<div class="container pb-40 pt-30">
    <div class="section-content">
        <section>
            <div class="row col-md-12">
                <input type="button" wire:click="applicationStep('apply')" class="btn btn-success" value="Apply New Application" style="float:right">
            </div></br>
            <div class="col-md-12" style="width: 100%">
                <div class="row">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Application No</th>
                                <th>Application Type</th>
                                <th>Application Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($application_list as $key=>$list)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$list->application_no??"Application No Will be Generate Soon"}}</td>
                                    <td>{{$list->application_type}}</td>
                                    <td>{{$list->application_status}}</td>
                                    @php
                                        $array_one = json_decode($list->application_step, true);
                                        $array_two = json_decode($list->applicationType->application_steps, true);
                                        // dump($array_one);
                                        // dump($array_two);
                                        $flag = 0;
                                        if($array_one && $array_two){
                                            if (sort($array_one) === sort($array_two)) {
                                                $flag = 1;
                                            }
                                        }

                                    @endphp
                                    <td>
                                    @if($list->application_status == "created")
                                        <input type="button" wire:click="editLoad({{$list->id}})" class="btn btn-success btn-xs" value="Edit">
                                    @endif
                                    @if($flag==1 && $list->application_status == "created")
                                        <input type="button" wire:click="finalSubmit({{$list->id}})" class="btn btn-success btn-xs" value="Final Submit">
                                    @endif
                                    <a href="{{route('view-application',Crypt::encrypt($list->id))}}" class="btn btn-primary btn-xs" target="_blank">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>
</div>
@else
    @include('livewire.common.header')
    <div class="container pb-40 pt-30">
        <div class="section-content">
            <section>
                <div class="container pb-0 pt-0">
                    <div class="section-content">
                        <div class="row">
                            <div class="alert alert-success" role="alert">
                                {{$form_name}}
                            </div>
                            <div wire:loading>
                                <div class="loader">
                                    <img src="{{asset('ZKZg.gif') }}" alt="Girl in a jacket" width="100" height="100">
                                </div>
                            </div>
                            {{-- @if($success==1)
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button><br/>
                                {{$success_msg}}
                            </div>
                            @endif
                            @if($error==1)
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert">&times;</button><br/>
                                {{$error_msg}}
                            </div>
                            @endif--}}
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIABasicInfo')">
                                            <div class="icon-box border-1px p-15 mb-30">
                                                <a class="icon pull-left sm-pull-none flip" href="#">
                                                    <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
                                                </a>
                                                <div class="ml-70 ml-sm-0">
                                                    <h5 class="icon-box-title mt-15 mb-5">Basic Information</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($sub_step=="AnnexureIABasicInfo")
                                        @include("livewire.common.basic_info")
                                    @endif

                                    @if($step=="AnnexureIA")
                                        @include('livewire.common.form.AnnexureIA')
                                    @elseif($step=="AnnexureIB")
                                        @include('livewire.common.form.AnnexureIB')
                                    @elseif($step=="AnnexureIC")
                                        @include('livewire.common.form.AnnexureIC')
                                    @elseif($step=="AnnexureID")
                                        @include('livewire.common.form.AnnexureID')
                                    @endif


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureImeansOfFinancing')">
                                            <div class="icon-box border-1px p-15 mb-30">
                                                <a class="icon pull-left sm-pull-none flip" href="#">
                                                    <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
                                                </a>
                                                <div class="ml-70 ml-sm-0">
                                                    <h5 class="icon-box-title mt-15 mb-5">Means of Financing the Project (in Rs.) </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($sub_step=="AnnexureImeansOfFinancing")
                                        @include("livewire.common.means-of-financing")
                                    @endif


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIAassistance')">
                                            <div class="icon-box border-1px p-15 mb-30">
                                                <a class="icon pull-left sm-pull-none flip" href="#">
                                                    <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
                                                </a>
                                                <div class="ml-70 ml-sm-0">
                                                    <h5 class="icon-box-title mt-15 mb-5">Assistance Sought under the scheme </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($sub_step=="AnnexureIAassistance")
                                        @if ($step=="AnnexureIC")
                                            @include("livewire.common.form.assistance-sought-start-up")
                                        @else
                                            @include("livewire.common.assistance-sought")
                                        @endif
                                    @endif
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIABankDetails')">
                                            <div class="icon-box border-1px p-15 mb-30">
                                                <a class="icon pull-left sm-pull-none flip" href="#">
                                                    <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
                                                </a>
                                                <div class="ml-70 ml-sm-0">
                                                    <h5 class="icon-box-title mt-15 mb-5">Bank Account Details</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($sub_step=="AnnexureIABankDetails")
                                        @include("livewire.common.bank-details")
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        </div>
@endif
</section>

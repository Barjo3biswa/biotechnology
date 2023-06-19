
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureICStartUpDetails')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Brief description of Start-up in terms of following:  </h5>
            </div>
        </div>
    </div>
</div>
@if ($sub_step == 'AnnexureICStartUpDetails')
    @include('livewire.common.start-up-details')
@endif

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIAcoast')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Project Cost  </h5>
            </div>
        </div>
    </div>
</div>
@if($sub_step=="AnnexureIAcoast")
    @include("livewire.common.project-coast")
@endif

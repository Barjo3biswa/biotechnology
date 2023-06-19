<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIADetails')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Details of Proposed BT Park / R&D Institute /
                    Finishing School </h5>
            </div>
        </div>
    </div>
</div>
@if ($sub_step == 'AnnexureIADetails')
    @include('livewire.common.details-bt-park')
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

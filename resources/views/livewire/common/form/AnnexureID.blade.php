{{-- <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7"  wire:click="formSubStep('AnnexureIIncubators')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Details of Eligible Incubators </h5>
            </div>
        </div>
    </div>
</div>
@if($sub_step=="AnnexureIIncubators")
    @include("livewire.common.incubator-details")
@endif --}}

{{-- <div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7"  wire:click="formSubStep('AnnexureIIncubatorProjection')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Financial Projections of the Project</h5>
            </div>
        </div>
    </div>
</div>
@if($sub_step=="AnnexureIIncubatorProjection")
    @include("livewire.common.financial-projection")
@endif --}}
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIBprojections')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Financial Projections of the Project (in Rs.) </h5>
            </div>
        </div>
    </div>
</div>
@if ($sub_step == 'AnnexureIBprojections')
    @include('livewire.common.projections')
@endif

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIBUnit')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">Details of Eligible BT Unit </h5>
            </div>
        </div>
    </div>
</div>
@if ($sub_step == 'AnnexureIBUnit')
    @include('livewire.common.details-of-bt-unit')
@endif
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7" wire:click="formSubStep('AnnexureIBUndertaking')">
        <div class="icon-box border-1px p-15 mb-30">
            <a class="icon pull-left sm-pull-none flip" href="#">
                <i class="flaticon-gardening-nature-21 text-theme-colored"></i>
            </a>
            <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mb-5">For Existing Units, undertaking Expansion/Diversification</h5>
            </div>
        </div>
    </div>
</div>
@if ($sub_step == 'AnnexureIBUndertaking')
    @include('livewire.common.undertaking')
@endif

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


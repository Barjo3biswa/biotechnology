<div class="form-container">
    <form wire:submit.prevent="saveAssistanceSoughtStartUP">
        <table class="table table-responsive white-green">
            <thead>
                <tr>
                    <th width=5%>#</th>
                    <th width=20%>ASSISTANCE TYPE</th>
                    <th width=20%>PROJECTED EXPENDITURE (IN RS.)</th>
                    <th width=20%>ELIGIBLE ASSISTANCE (IN RS.)</th>
                    <th width=20%>CLAIMED ASSISTANCE (IN RS.)</th>
                    <th width=20%>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assistance_sought as $key=>$val)
                    <tr>
                        <th>{{++$key}}</th>
                        <th>{{$val->typeii}}</th>
                        <th><input type="hidden" type="hidden" wire:model="assistance_sought_sp_values.{{$val->id}}.id">
                        <input type="number" class="form-control" wire:model="assistance_sought_sp_values.{{$val->id}}.expandi"></th>
                        <th><input type="text" class="form-control" wire:model="assistance_sought_sp_values.{{$val->id}}.eligi_assis"></th>
                        <th><input type="text" class="form-control" wire:model="assistance_sought_sp_values.{{$val->id}}.claimed_assis"></th>
                        <th><input type="text" class="form-control" wire:model="assistance_sought_sp_values.{{$val->id}}.remarks"></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
</div>

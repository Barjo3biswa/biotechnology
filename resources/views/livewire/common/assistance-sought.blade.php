<div class="form-container">
    <form wire:submit.prevent="saveAssistanceSought">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th width=5%>#</th>
                    <th width=20%>ASSISTANCE TYPE</th>
                    <th width=15%>INDICATIVE MAXIMUM ELIGIBLE AMOUNT OF ASSISTANCE (IN RS.)</th>
                    <th width=60%>REMARKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assistance_sought as $key=>$val)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$val->type}}</td>
                        <td><input type="hidden" type="hidden" wire:model="assistance_sought_values.{{$val->id}}.id">
                            <input type="number" class="form-control" wire:model="assistance_sought_values.{{$val->id}}.amount"></td>
                        <td><input type="text" class="form-control" wire:model="assistance_sought_values.{{$val->id}}.remarks"></td>
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

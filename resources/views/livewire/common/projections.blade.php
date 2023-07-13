<div class="form-container">
    <form wire:submit.prevent="saveFinancialProjection" enctype="multipart/form-data">
        <table class="table table-responsive white-green">
            <tbody>
                <tr>
                    {{-- <th>#</th> --}}
                    <th>COMPONENT</th>
                    <th>Year I</th>
                    <th>Year II</th>
                    <th>Year III</th>
                    <th>Year IV</th>
                    <th>Year V</th>
                </tr>
            </tbody>
            <tbody>
                @foreach ($financial_projection as $key=>$project)
                    <tr>
                        <th>{{$project->name}}
                        <input type="hidden" wire:model="financial_projections.{{$project->id}}.id">
                        </th>
                        <th><input type="text" class="form-control" wire:model="financial_projections.{{$project->id}}.year_i"></th>
                        <th><input type="text" class="form-control" wire:model="financial_projections.{{$project->id}}.year_ii"></th>
                        <th><input type="text" class="form-control" wire:model="financial_projections.{{$project->id}}.year_iii"></th>
                        <th><input type="text" class="form-control" wire:model="financial_projections.{{$project->id}}.year_iv"></th>
                        <th><input type="text" class="form-control" wire:model="financial_projections.{{$project->id}}.year_v"></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>

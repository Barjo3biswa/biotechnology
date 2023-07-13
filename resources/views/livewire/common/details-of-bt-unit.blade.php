<div class="form-container">
    <form wire:submit.prevent="saveDetailsBTParkIB" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-12">
                <label>NEW UNIT OR EXPANSION/DIVERSIFICATION:</label>
                <input type="text" class="form-control" wire:model="unit_expansion">
                @error('unit_expansion') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>LOCATION ADDRESS:</label>
                <input type="text" class="form-control" wire:model="location_ib">
                @error('location_ib') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>AREA OF THE LAND / OFFICE SPACE:</label>
                <input type="text" class="form-control" wire:model="office_space">
                @error('office_space') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>PROOF OF LAND/OFFICE SPACE POSSESSION (PLEASE ENCLOSE COPY OF VILLAGE RECORD AND MAP):</label>
                <input type="file" class="form-control" wire:model="proff_of_land_doc">
                @error('proff_of_land_doc') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>BRIEF DESCRIPTION OF THE PROJECT:</label>
                <input type="file" class="form-control" wire:model="description_ib">
                @error('description_ib') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>NO OBJECTION CERTIFICATE (NOC) FROM ASSAM POLLUTION CONTROL BOARD (PLEASE ENCLOSE A COPY):</label>
                <input type="file" class="form-control" wire:model="noc_ib">
                @error('noc_ib') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>PLEASE ENCLOSE DETAILED PROJECT REPORT :</label>
                <input type="file" class="form-control" wire:model="report_ib">
                @error('report_ib') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>BUSINESS DEVELOPMENT & RECRUITMENT SCHEDULE (PROJECTIONS):</label>
            </div>
        </div>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Year 1</th>
                    <th>Year 2</th>
                    <th>Year 3</th>
                    <th>Year 4</th>
                    <th>Year 5</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recruitment_master as $key=>$master )
                    <tr>
                        <th>{{$master->name}}</th>
                        <th><input type="text" class="form-control" wire:model="recruitment_schedule.{{$master->id}}.year_i"></th>
                        <th><input type="text" class="form-control" wire:model="recruitment_schedule.{{$master->id}}.year_ii"></th>
                        <th><input type="text" class="form-control" wire:model="recruitment_schedule.{{$master->id}}.year_iii"></th>
                        <th><input type="text" class="form-control" wire:model="recruitment_schedule.{{$master->id}}.year_iv"></th>
                        <th><input type="text" class="form-control" wire:model="recruitment_schedule.{{$master->id}}.year_v"></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>

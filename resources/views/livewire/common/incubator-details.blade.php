<div class="form-container">
    <form wire:submit.prevent="saveIncubatorDetails" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">LOCATION ADDRESS :</label>
                <input class="form-control" type="text" wire:model="location_address">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">AREA OF THE LAND / OFFICE SPACE :</label>
                <input class="form-control" type="text" wire:model="area_office_space">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">PROOF OF LAND/OFFICE SPACE POSSESSION:</label>
                <input class="form-control" type="text" wire:model="proff_of_land_incubator">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">BRIEF DESCRIPTION OF THE PROJECT:</label>
                <input class="form-control" type="text" wire:model="incubator_description">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">PLEASE ENCLOSE DETAILED PROJECT REPORT:</label>
                <input class="form-control" type="file" wire:model="detailed_project_report">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">NO OBJECTION CERTIFICATE (NOC) FROM ASSAM POLLUTION CONTROL BOARD (PLEASE ENCLOSE A COPY) :</label>
                <input class="form-control" type="file" wire:model="incubator_noc">
            </div>
        </div>

        <table class="table-table-responsive">
           <thead>
                <tr>
                    <th>#</th>
                    <th>Year 1</th>
                    <th>Year 2</th>
                    <th>Year 3</th>
                    <th>Year 5</th>
                    <th>Total</th>
                </tr>
           </thead>
           <tbody>
                @foreach($incubation_schedule as $schedule)
                    <tr>
                        <th>{{$schedule->name}}
                        <input type="hidden" wire:model="incubation_data.{{$schedule->id}}.id"></th>
                        <th><input type="text" class="form-control" wire:model="incubation_data.{{$schedule->id}}.year_i"></th>
                        <th><input type="text" class="form-control" wire:model="incubation_data.{{$schedule->id}}.year_ii"></th>
                        <th><input type="text" class="form-control" wire:model="incubation_data.{{$schedule->id}}.year_iii"></th>
                        <th><input type="text" class="form-control" wire:model="incubation_data.{{$schedule->id}}.year_iv"></th>
                        <th><input type="text" class="form-control" wire:model="incubation_data.{{$schedule->id}}.year_v"></th>
                    </tr>
                @endforeach
                {{-- <tr>
                    <th>NO. OF NEW STARTUPS TO BE ADMITTED FOR INCUBATION </th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                </tr>

                <tr>
                    <th>NO. OF START-UPS TO BE GRADUATED FROM THE INCUBATOR</th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                </tr>


                <tr>
                    <th>NO. OF TRAINING / INCUBATION / ACCELERATION PROGRAMMES TO BE CONDUCTED </th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                </tr>

                <tr>
                    <th>NO. OF INCUBATEE RESOURCES TO BE TRAINED  </th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                </tr>

                <tr>
                    <th>NO. OF CONFERENCES / SEMINARS / WORKSHOPS TO BE ORGANISED </th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                </tr> --}}
           </tbody>
        </table>


        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>

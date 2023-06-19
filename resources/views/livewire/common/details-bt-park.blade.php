<div class="form-container">
    <form wire:submit.prevent="saveDetailsBTPark" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-12">
                <label>LOCATION ADDRESS :</label>
                <input type="text" class="form-control" wire:model="location">
                @error('location') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="mobile">FINALIZED AREA OF THE LAND (OFFICE SPACE WHERE BT PARK / R&D INSTITUTE / FINISHING SCHOOL WILL BE SET UP) :</label>
                <input type="text" class="form-control" wire:model="area_of_land">
                @error('area_of_land') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="email">PROOF OF LAND / OFFICE SPACE POSSESSION (PLEASE ENCLOSE MAP AND RELEVANT REVENUE RECORD):</label>
                <input type="file" class="form-control" wire:model="proff_of_land">
                @error('proff_of_land') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="email">BRIEF DESCRIPTION OF THE ACTIVITIES UNDERTAKEN SO FAR BY THE APPLICANT SINCE THE IN-PRINCIPLE APPROVAL FOR SETTING UP THE BT PARK / R&D INSTITUTE / FINISHING SCHOOL:</label>
                <input type="text" class="form-control" wire:model="description">
                @error('description') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="email">PLEASE ENCLOSE DETAILED PROJECT REPORT OF THE PROPOSED PROJECT:</label>
                <input type="file" class="form-control" wire:model="project_report">
                @error('project_report') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label for="email">NO OBJECTION CERTIFICATE (NOC) FROM ASSAM POLLUTION CONTROL BOARD (FOR BT PARK OTHER THAN FOR BIO-INFORMATICS) (PLEASE ENCLOSE A COPY) :</label>
                <input type="file" class="form-control" wire:model="noc_certificate">
                @error('noc_certificate') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>

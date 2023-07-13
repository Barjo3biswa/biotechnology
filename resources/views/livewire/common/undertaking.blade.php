<div class="form-container">
    <form wire:submit.prevent="saveDetailsBTUndertakingIB" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-12">
                <label>NUMBER OF EMPLOYEES IN EXISTING UNIT:</label>
                <input type="text" class="form-control" wire:model="no_of_employee">
                @error('no_of_employee') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>ESTIMATED ANNUAL EPF CONTRIBUTION FOR CURRENT EMPLOYEES (GIVE SCHEDULE OF EPF & NUMBER OF CURRENT EMPLOYEES) :</label>
                <input type="text" class="form-control" wire:model="annual_epf">
                @error('annual_epf') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>AVERAGE OF LAST ONE YEAR’S ELECTRICITY CONSUMPTION IN UNITS:</label>
                <input type="text" class="form-control" wire:model="electricity_consupt">
                @error('electricity_consupt') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>CURRENT AREA UNDER USAGE (IN SQ. FT.) :</label>
                <input type="file" class="form-control" wire:model="current_area">
                @error('current_area') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>ANNUAL TURNOVER OF LAST THREE YEARS:</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label>Year I:</label>
                <input type="text" class="form-control" wire:model="year_i">
                @error('year_i') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-4">
                <label>Year II:</label>
                <input type="text" class="form-control" wire:model="year_ii">
                @error('year_ii') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-4">
                <label>Year III:</label>
                <input type="text" class="form-control" wire:model="year_iii">
                @error('year_iii') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <label>VAT/CST/GST PAID TO GOVERNMENT OF ASSAM OVER LAST THREE YEARS:</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label>Year I:</label>
                <input type="text" class="form-control" wire:model="vat_year_i">
                @error('vat_year_i') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-4">
                <label>Year II:</label>
                <input type="text" class="form-control" wire:model="vat_year_ii">
                @error('vat_year_ii') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-4">
                <label>Year III:</label>
                <input type="text" class="form-control" wire:model="vat_year_iii">
                @error('vat_year_iii') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>

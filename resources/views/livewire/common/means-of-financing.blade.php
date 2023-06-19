<div class="form-container">
    <form wire:submit.prevent="saveFinancing">
        <div class="form-group row">
            <div class="col-sm-6">
                <label>TOTAL PROJECT COST:</label>
                <input type="text" class="form-control" wire:model="tot_coast">
                @error('tot_coast') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">PROMOTORS CONTRIBUTION:</label>
                <input type="text" class="form-control" wire:model="promoters_contribution">
                @error('promoters_contribution') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">CONTRIBUTION FROM ENTERPRISES OCCUPYING PARK :</label>
                <input type="text" class="form-control" wire:model="enterprise_contribution">
                @error('enterprise_contribution') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">EXPECTED ASSISTANCE FROM GOVERNMENT OF ASSAM:</label>
                <input type="text" class="form-control" wire:model="expect_from_ass_gov">
                @error('expect_from_ass_gov') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">EXPECTED ASSISTANCE FROM OTHER GOVERNMENT ORGANIZATIONS:</label>
                <input type="text" class="form-control" wire:model="expect_from_oth_gov">
                @error('expect_from_oth_gov') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">DEBT/BORROWING (PLEASE INCLUDE LOAN SANCTION LETTER):</label>
                <input type="file" class="form-control" wire:model="loan_selection_letter">
                @error('loan_selection_letter') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="mobile">Total :</label>
                <input type="text" class="form-control" wire:model="total">
                @error('total') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

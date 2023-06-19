<div class="form-container">
    <form wire:submit.prevent="saveBankDetails">
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">NAME OF ACCOUNT HOLDER:</label>
                <input class="form-control" type="text" wire:model="ac_hol_name">
                @error('ac_hol_name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <div class="col-sm-6">
                <label class="col-form-label">NAME AND ADDRESS OF BANK:</label>
                <input class="form-control" type="text" wire:model="bank_name">
                @error('bank_name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">BANK ACCOUNT NUMBER:</label>
                <input class="form-control" type="text" wire:model="account_number">
                @error('account_number') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <div class="col-sm-6">
                <label class="col-form-label">IFSC CODE:</label>
                <input class="form-control" type="text" wire:model="ifsc_code">
                @error('ifsc_code') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">RTGS DETAILS:</label>
                <input class="form-control" type="text" wire:model="rtgs_dts">
                @error('rtgs_dts') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>

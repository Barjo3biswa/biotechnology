<div class="form-container">
    <form wire:submit.prevent="saveStartUp">
        <div class="form-group row">
            <div class="col-sm-12">
                <label>BUSINESS IDEA :</label>
                <textarea class="form-control" cols="10" rows="3" wire:model="business_idea"></textarea>
                @error('business_idea') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>PRODUCT / SERVICE :</label>
                <textarea class="form-control" cols="10" rows="3" wire:model="product_service"></textarea>
                @error('product_service') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>TECHNOLOGY:</label>
                <textarea class="form-control" cols="10" rows="3" wire:model="technology"></textarea>
                @error('technology') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>MANAGEMENT APPROACH FOR EFFLUENT DISCHARGE :</label>
                <textarea class="form-control" cols="10" rows="3" wire:model="approach"></textarea>
                @error('approach') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>MENTORS NAME, IF AVAILABLE :</label>
                <textarea class="form-control" cols="10" rows="3" wire:model="mentor"></textarea>
                @error('mentor') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label>INCUBATOR NAME AND ADDRESS, IF APPLICABLE :</label>
                <textarea class="form-control" cols="30" rows="3" wire:model="incubator"></textarea>
                @error('incubator') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
</div>

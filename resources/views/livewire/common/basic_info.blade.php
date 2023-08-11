<div class="form-container">
    <form wire:submit.prevent="saveBasicInfo" enctype="multipart/form-data">
        @if($step=="AnnexureIA")
        <div class="form-group row">
            <div class="col-sm-3">
                <label class="col-form-label">You are applying for</label>
            </div>
            <div class="col-sm-2">
                <input type="radio" wire:model="sub_step_name" value="BT Park">
                <label>BT Park</label><br>
            </div>
            <div class="col-sm-2">
                <input type="radio" wire:model="sub_step_name" value="R&D Institute">
                <label>R&D Institute</label><br>
            </div>
            <div class="col-sm-2">
                <input type="radio" wire:model="sub_step_name" value="Finishing School">
                <label>Finishing School</label>
            </div>
        </div>
        @endif
        <div class="form-group row">
            <div class="col-sm-12">
                <label class="col-form-label">Name of the Unit:</label>
                <input class="form-control" type="text" wire:model="unit_name">
                @error('unit_name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">Telephone:</label>
                <input class="form-control" type="text" wire:model="telephone_no">
                @error('telephone_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-6">
                <label class="col-form-label">Mobile:</label>
                <input class="form-control" type="text" wire:model="phone_no">
                @error('phone_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">Email:</label>
                <input class="form-control" type="text" wire:model="email">
                @error('email') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-6">
                <label class="col-form-label">Type of the Entity:</label>
                <select class="form-control" wire:model="entity_type">
                    <option value="">Select entity type</option>
                    @foreach ($entity_types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('entity_type') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">PAN Number:</label>
                <input class="form-control" type="text" wire:model="pan_no">
                @error('pan_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-6">
                <label class="col-form-label">GST Registration No.:</label>
                <input class="form-control" type="text" wire:model="gst_no">
                @error('gst_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">Unit/Agency/Institution Registered with DSIR/CSIR:</label>
                <select class="form-control" wire:model="dsir_reg_status">
                    <option value="">--Select--</option>
                    <option value="1" >Yes</option>
                    <option value="0">No</option>
                </select>
                @error('dsir_reg_status') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            @if($dsir_reg_status==1)
            <div class="col-sm-6">
                <label class="col-form-label">PLEASE PROVIDE REGISTRATION NO:</label>
                <input type="text" class="form-control" wire:model="dsr_csr_reg_no">
                @error('dsr_csr_reg_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            @endif
        </div>




        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">CERTIFICATE OF INCORPORATION (PLEASE PROVIDE CERTIFIED COPY):</label>
                <input class="form-control" type="file" wire:model="certificate_of_incorporation">
                @error('pan_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-6">
                <label class="col-form-label">PAN NUMBER (PLEASE PROVIDE CERTIFIED COPY):</label>
                <input class="form-control" type="file" wire:model="pan_coppyii">
                @error('gst_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">GST REGISTRATION NO. (PLEASE PROVIDE REGISTRATION COPY) :</label>
                <input class="form-control" type="file" wire:model="registration_coppy">
                @error('pan_no') <span class="error-msg">{{ $message }}</span> @enderror
            </div>
        </div>






        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label"> DIRECTORS/ PROMOTORS Details:</label>
            </div>
            <div class="col-sm-6">
                <input wire:click="Increment('director_count')" class="btn btn-primary" value="Add More">
            </div>
        </div>
        @foreach($director_array as $key=>$val)
            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">NAME:</label>
                    <input type="hidden" wire:model="director_details.{{$key}}.dir_id">
                    <input class="form-control" type="text" wire:model="director_details.{{$key}}.dir_name">
                </div>
                <div class="col-sm-6">
                    <label class="col-form-label">DIN /PAN No.:</label>
                    <input class="form-control" type="text" wire:model="director_details.{{$key}}.din_pan_no">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">EMAIL:</label>
                    <input class="form-control" type="text" wire:model="director_details.{{$key}}.dir_email">
                </div>
                <div class="col-sm-6">
                    <label class="col-form-label">CONTACT NO No.:</label>
                    <input class="form-control" type="number" wire:model="director_details.{{$key}}.dir_cont">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">ADDRESS:</label>
                    <input class="form-control" type="text" wire:model="director_details.{{$key}}.dir_add">
                </div>
                <div class="col-sm-2">
                    <i aria-hidden="true" wire:click="Decrement('director_count',{{$key}})" class=" fa fa-trash btn btn-danger"></i>
                </div>
            </div>
        @endforeach
        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

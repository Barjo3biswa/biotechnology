<div class="form-container">
    <form wire:submit.prevent="saveProjectCoast">
        {{-- <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="password">
            </div>
        </div> --}}
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="button" class="btn btn-primary" value="Add More" wire:click="Increment('coast_count')">
            </div>
        </div>
        @for ($i=0; $i < $coast_count;$i++)
            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">PROJECT COMPONENT</label>
                    <input class="form-control" type="text" wire:model="project_coast.{{$i}}.component_name">
                    @error('project_coast.'.$i.'.component_name') <span class="error-msg">{{ $message }}</span> @enderror
                </div>

                <div class="col-sm-6">
                    <label class="col-form-label">COST (IN RS.)</label>
                    <input class="form-control" type="number" wire:model="project_coast.{{$i}}.coast">
                    @error('project_coast.'.$i.'.coast') <span class="error-msg">{{ $message }}</span> @enderror
                </div>
            </div>
        @endfor
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
</div>

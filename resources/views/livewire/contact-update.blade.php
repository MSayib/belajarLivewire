<div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            <div class="form-row"> {{-- error ga nampil, bug nih --}}
                <div class="col">
                    <input wire:model="name"
                    type="text"
                    name="name"id="name"
                    class="form-control"
                    placeholder="Name" @error('name') is-invalid @enderror>
                    
                    @error('name')
                    <div class="span invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone"
                    type="text"
                    name="phone" id="phone"
                    class="form-control"
                    placeholder="Phone" @error('phone') is-invalid @enderror>
                    
                    @error('phone')
                    <div class="span invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
    </form>
</div>

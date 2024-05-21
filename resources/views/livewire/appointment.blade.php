<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h4 class="card-title">STUDENT QAS</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#modalxl" wire:click="show()"
                                wire:key>Add</button>
                        </div>
                    </div>
                    <livewire:appointment-list />
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="modal" id="modalxl" tabindex="1" role="dialog" aria-hidden="true" wire:ignore>
        <livewire:student-create />
    </div>
</div>
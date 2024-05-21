<div>
    <div class="row pb-3">
        <label class="pt-3 pb-2">Playing On Swings</label>
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Time</label>
            <div class="col-8">
             <x-input-text name="time"  type="number" />
            </div>
        </div> 
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Sequence</label>
            <div class="col-8">
             <x-input-text name="sequence"  type="number" /> 
            </div>
        </div> 
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Quantity</label>
            <div class="col-8">
              <x-input-text  name="quantity"  type="number"/>
            </div>
        </div>
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Quality</label>
            <div class="col-8">
             <x-input-text name="quality"  type="number" />
            </div>
        </div> 
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Delivery</label>
            <div class="col-8">
             <x-input-text name="delivery"  type="number" /> 
            </div>
        </div> 
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Time Taken</label>
            <div class="col-8">
              <x-input-text  name="time_taken"  type="number"/>
            </div>
        </div>
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Target</label>
            <div class="col-8">
             <x-input-text name="target"  type="number" />
            </div>
        </div> 
        <div class="col-4 row pb-2">
            <label class="col-4 col-form-label">Activity Type</label>
            <div class="col-8">
              <x-input-select name="activity_type" :records="[]" />
            </div>
        </div> 

      </div>
</div>

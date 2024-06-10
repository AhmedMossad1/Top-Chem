{{ csrf_field()}}

<div class="row">
    @php $input = "name"; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Category Name</label>
        <input type="text" @error('name') is-invalid @enderror name={{ $input }} value="{{isset($row) ?$row->{$input} :''}}" class="form-control">
        @error($input)
        <span  role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>

    @php $input = "description"; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Description</label>
            <textarea name="{{ $input }}"  cols="30" rows="10" class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

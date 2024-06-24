{{ csrf_field()}}

<div class="row">
    @php $input = "name"; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Name</label>
        <input type="text" @error('name') is-invalid @enderror name={{ $input }} value="{{isset($row) ?$row->{$input} :''}}" class="form-control">
        @error($input)
        <span  role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>
    @php $input = "phone"; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">phone</label>
        <input type="text" @error('phone') is-invalid @enderror name={{ $input }} value="{{isset($row) ?$row->{$input} :''}}" class="form-control">
        @error($input)
        <span  role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>

    @php $input = "email"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
            <input type="email" name="{{$input}}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    @php $input = "message"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Message</label>
            <textarea name="{{ $input }}"  cols="30" rows="10" class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


{{ csrf_field()}}
<div class="row">
    @php $input = "name"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Product Name</label>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = "description"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">description</label>
            <input type="text" name="{{$input}}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control @error($input) is-invalid @enderror">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = "image"; @endphp
    <div class="col-md-6">
        <div >
            <label >Product image</label>
            <input type="file" name="{{$input}}">
            @error($input)
            <span  role="alert">
                                        <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = "published"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video Status</label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                <option value="1" {{ isset($row) && $row->{$input} == 1 ? 'selected'  :'' }}>published</option>
                <option value="0" {{ isset($row) && $row->{$input} == 0 ? 'selected'  :'' }}>hidden</option>
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = "cat_id"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Product Category</label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                @foreach($categories  as $caegory)
                    <option value="{{ $caegory->id }}" {{ isset($row) && $row->{$input} == $caegory->id ? 'selected'  :'' }}>{{ $caegory->name }}</option>
                @endforeach
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>



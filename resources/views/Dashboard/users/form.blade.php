{{ csrf_field() }}

<div class="row">
    @php $input = "name"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="text" @error('name') is-invalid @enderror name={{ $input }}
                value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control">
            @error($input)
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "email"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
            <input type="email" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
                class="form-control @error($input) is-invalid @enderror">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "password"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="password" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "group"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">User Group</label>
            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                <option value="admin" {{ isset($row) && $row->{$input} == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ isset($row) && $row->{$input} == 'user' ? 'selected' : '' }}>User</option>
            </select>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "job_title"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Job Title</label>
            <input type="text" @error($input) is-invalid @enderror name={{ $input }}
                value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control">
            @error($input)
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "image"; @endphp
    <div class="col-md-6">
        <div>
            <label>image</label>
            <input type="file" name="{{ $input }}">
            @error($input)
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @php $input = "show"; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Show</label>
            <select name="show" class="form-control @error('show') is-invalid @enderror">
                <option value="1" {{ old('show') == 1 ? 'selected' : '' }}>Show</option>
                <option value="0" {{ old('show') == 0 ? 'selected' : '' }}>Hidden</option>
            </select>
            @error($input)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

@extends('layouts.app')

@section('content')

    <section class="py-7 bg-gradient-dark position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center flex-column">
                    <h2 class="text-white">{{ __('Contact US') }}</h2>
                    <p class="pe-5 text-white opacity-8 z-index-1">
                        You need more information? Check what other persons are saying about our product. They are very happy with their purchase.
                    </p>
                    <div class="d-flex p-2 text-white opacity-8">
                        <i class="material-icons text-sm">location_on</i>
                        <span class="text-sm ps-3">سموحة - ابراج جرين تاورز برج 19 الدور الخامس</span>
                    </div>
                    <div class="d-flex p-2 text-white opacity-8">
                        <i class="material-icons text-sm">call</i>
                        <span class="text-sm ps-3">(+20) 1014171825</span>
                    </div>
                    <div class="d-flex p-2 text-white opacity-8">
                        <i class="material-icons text-sm">email</i>
                        <span class="text-sm ps-3">Topchem23@yahoo.com</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mt-5 mt-lg-0">
                        <form class="contact-form" autocomplete="off" action="{{ route('contact.store') }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>{{ __('Name') }}</label>
                                            @php $input = "name"; @endphp
                                            <input type="text" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" placeholder="{{ __('Name') }}">
                                            @error($input)
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group input-group-static">
                                        <label>{{ __('Email') }}</label>
                                        @php $input = "email"; @endphp
                                        <input type="email" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" placeholder="{{ __('Email') }}">
                                        @error($input)
                                            <span role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group input-group-static mt-4">
                                    <label>{{ __('Message') }}</label>
                                    @php $input = "message"; @endphp
                                    <textarea name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" placeholder="{{ __('Type here') }}" rows="3"></textarea>
                                    @error($input)
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-info mt-3">{{ __('Submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

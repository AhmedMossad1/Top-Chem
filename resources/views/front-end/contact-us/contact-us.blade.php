@extends('layouts.app')

@section('content')
    {{-- <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Keep in touch?</h2>
                    <form class="contact-form" action="  {{ route('contact.store') }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    @php $input = "name"; @endphp
                                    <input type="text" @error($input) is-invalid @enderror name="{{ $input }}"
                                        class="form-control" placeholder="Name">
                                    @error($input)
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-email-85"></i>
                                        </span>
                                    </div>
                                    @php $input = "email"; @endphp
                                    <input type="text" @error($input) is-invalid @enderror name="{{ $input }}"
                                        class="form-control" placeholder="Email">
                                    @error($input)
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <label>Message</label>
                        @php $input = "message"; @endphp
                        <textarea class="form-control" @error($input) is-invalid @enderror name="{{ $input }}" required rows="4"
                            placeholder="Tell us your thoughts and feelings..."></textarea>
                        @error($input)
                            <span role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="py-7 bg-gradient-dark position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center flex-column">
                    <h2 class="text-white">Get in Touch</h2>
                    <p class="pe-5 text-white opacity-8 z-index-1">You need more information? Check what other persons are
                        saying about our product. They are very happy with their purchase.</p>
                    <p class="mt-4 text-white opacity-8 z-index-1">730 Dyonisie Wolf <br> Bucharest, RO 010458</p>
                    <div class="d-flex p-2 text-white opacity-8">
                        <i class="material-icons text-sm">call</i>
                        <span class="text-sm ps-3">(+20) 1091722194</span>
                    </div>
                    <div class="d-flex p-2 text-white opacity-8">
                        <i class="material-icons text-sm">email</i>
                        <span class="text-sm ps-3">hello@a.com</span>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card mt-5 mt-lg-0">
                        <form id="contact-form" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>First name</label>
                                            <input class="form-control" placeholder="eg. William" aria-label="First Name..."
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group input-group-static">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="will@creative-tim.com">
                                    </div>
                                </div>
                                <div class="input-group input-group-static mt-4">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" placeholder="Type here" id="message" rows="3"></textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-8">

                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-info mt-3">Submit</button>
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

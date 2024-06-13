@extends('layouts.app')
@section('title', 'about')
@section('content')
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row justify-content-start">
                        <div class="col-md-12">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                                <h5>{{ __('Vision') }}</h5>
                                <p>تهتم توب كيم بالإحتفاظ بنموذجها التجارى الناجح كشركة رائدة فى السوق فى مصر بعد أكثر من عدةأعوام من المعرفة العميقة لمجال الكيماويات في السوق المصرى التى مكنتنا من الوصول إلى الريادة بل والتوسع فى مجالات أخرى.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-4">
                        <div class="col-md-12">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">3p</i>
                                <h5>{{ __('Goals') }}</h5>
                                <p>تهتم توب كيم بالإحتفاظ بنموذجها التجارى الناجح كشركة رائدة فى السوق فى مصر بعد أكثر من عدةأعوام من المعرفة العميقة لمجال الكيماويات في السوق المصرى التى مكنتنا من الوصول إلى الريادة بل والتوسع فى مجالات أخرى.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="/FrontendV2/img/bg9.jpg"
                                    alt="img-colored-shadow" class="img-fluid border-radius-lg">
                            </a>
                        </div>
                        {{-- <div class="card-body text-center">
                            <h5 class="font-weight-normal">
                                <a href="javascript:;">Get insights on Search</a>
                            </h5>
                            <p class="mb-0">
                                Website visitors today demand a frictionless user expericence — especially when using
                                search. Because of the hight standards.
                            </p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <section class="py-5" style="background-color: #c5c7d3; color: Black;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5">
                    <div class="icon icon-shape icon-md bg-gradient-primary shadow text-center mb-3">
                        <i class="material-icons opacity-10">supervisor_account</i>
                    </div>
                    <h3>{{ __('Our Team') }}</h3>
                    <p>This is the paragraph where you can write more details about your team. Keep your user engaged by providing meaningful information.</p>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($users as $user)
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card card-profile card-plain">
                        <div class="text-start mt-n5 z-index-1">
                            <div class="position-relative w-25">
                                <div class="blur-shadow-avatar">
                                    <img class="avatar avatar-xl rounded-circle" src="{{ asset('uploads/' . $user->image) }}" alt="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body ps-0">
                            <h5 class="mb-0">{{ $user->name }}</h5>
                            <p class="text-muted">{{ $user->job_title }}</p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

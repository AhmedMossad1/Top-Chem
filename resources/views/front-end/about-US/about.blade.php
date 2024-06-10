@extends('layouts.app')
@section('title', 'about')
@section('content')
<div class="section landing-section">
    <div class="container">
        <div class="row">
            <section class="py-7">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="max-width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal">
                                        <a href="javascript:;">مرحبا بكم في توب كيم للكيماويات</a>
                                    </h5>
                                    <p class="mb-0">
                                        مواكبة احدث التقنيات العالمية فى مجال الزراعة والسرعة فى نقل الخبرات العالمية الحديثة لتطوير السوق المحلى والنهوض بشركتنا الى مصاف الشركات الكبرى اقليميا وعالميا عن طريق تلبية احتياجات السوق بكل ما هو جديد مميز.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="info mb-6">
                                <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
                                <h5>{{ __('Vision') }}</h5>
                                <p>نسعى لأن يكون لنا دور وبصمة واضحة في السوق المصرى والعربى وتنمية وتطوير أداء أكبر عدد ممكن من المزارع والشركات الزراعية التي نتعامل معها في المجال الزراعى حتى يكون لهم الريادة في مجال أعمالهم ، وأن نساعدهم في الحفاظ على استثماراتهم وتنميتها وتحقيق أعلى عائد ممكن لهم.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info mb-4">
                                <i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
                                <h5>{{ __('Goals') }}</h5>
                                <p>أن تكون شركة (كرست للكيماويات ) من أفضل 10 شركات فى مصر التي تقدم لعملائها حلول متطورة وعملية قابلة للتطبيق وأن نكون الاختيار الأول للمزارعين الذين يبحثون عن الجودة والأمانة معاً في هذا المجال وأن تكون خدماتنا دائماً فوق مستوى توقعات عملائنا وأن نستعين لتحقيق ذلك بأفضل الكفاءات المهنية وأحدث الأساليب والأدوات العلمية.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
    {{-- <section class="py-9">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto">
            <h3>Read More About Us</h3>
            <p class="pe-5">Pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.</p>
            <a href="javascript:;" class="text-primary icon-move-right">More about us
                <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
            <div class="p-3 info-horizontal">
                <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">

                <i class="fa fa-ship" aria-hidden="true"></i>
                </div>
                <div class="description ps-3">
                <p class="mb-0">It becomes harder for us to give others a hand. <br> We get our heart broken by people we love.</p>
                </div>
            </div>

            <div class="p-3 info-horizontal">
                <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                <i class="fas fa-handshake opacity-10"></i>
                </div>
                <div class="description ps-3">
                <p class="mb-0">As we live, our hearts turn colder. <br>Cause pain is what we go through as we become older.</p>
                </div>
            </div>
            <div class="p-3 info-horizontal">
                <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                <i class="fas fa-hourglass opacity-10"></i>
                </div>
                <div class="description ps-3">
                <p class="mb-0">When we lose family over time. <br> What else could rust the heart more over time? Blackgold.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section> --}}
  <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->
        </div>
    </div>
</div>
@endsection

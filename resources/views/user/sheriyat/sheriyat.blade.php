@extends('user.master')
@section('title')
    @if($lang=="uz")
        She'riyat bo'stoni
    @endif @if($lang=="ru")
        Поэтический сад
    @endif
    @if($lang=="en")
        Poetry garden
    @endif
@endsection
@section('content')
    <section class="header1 cid-t7cNRZO0VJ mbr-parallax-background" id="header1-20">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>
                            @if($lang=="uz")
                                She'riyat bo'stoni
                            @endif @if($lang=="ru")
                                Поэтический сад
                            @endif
                            @if($lang=="en")
                                Poetry garden
                            @endif
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>

    <section class="content2 cid-t7cO3U3VWM" id="content2-21">


        <div class="container">

            <div class="row mt-4">
                @foreach($sherlar as $sh)
                    @if($lang=="uz")
                        <div class="item features-image сol-12 col-md-6 col-lg-6">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{asset('front/assets/images/sh1-284x160.jpg')}}" alt="" title="">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5">{!! $sh->shoir->name !!} ijodi</h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>
                                            {!! $sh->title_uz !!}
                                        </strong>
                                    </h6>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                        {!! substr($sh->matn_uz,0,400) !!}...
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a
                                        href="{{route('front.kimdir_ijodi',$sh->shoir->id)}}"
                                        class="btn item-btn btn-primary display-7">
                                        Davomi...
                                    </a></div>
                            </div>
                        </div>
                    @endif
                    @if($lang=="ru")
                        <div class="item features-image сol-12 col-md-6 col-lg-6">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{asset('front/assets/images/sh1-284x160.jpg')}}" alt="" title="">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5">{!! $sh->shoir->name !!}  @lang('public.sheriyat2')</h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>
                                            {!! $sh->title_ru !!}
                                        </strong>
                                    </h6>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                        {!! substr($sh->matn_ru,0,400) !!}...
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a
                                        href="{{route('front.kimdir_ijodi',$sh->shoir->id)}}"
                                        class="btn item-btn btn-primary display-7">
                                        Читать далее...
                                    </a></div>
                            </div>
                        </div>
                    @endif
                    @if($lang=="en")
                        <div class="item features-image сol-12 col-md-6 col-lg-6">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{asset('front/assets/images/sh1-284x160.jpg')}}" alt="" title="">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5">{!! $sh->shoir->name !!}  @lang('public.sheriyat2')</h5>
                                    <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>
                                            {!! $sh->title_en !!}
                                        </strong>
                                    </h6>
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                        {!! substr($sh->matn_en,0,400) !!}...
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a
                                        href="{{route('front.kimdir_ijodi',$sh->shoir->id)}}"
                                        class="btn item-btn btn-primary display-7">
                                        Read more...
                                    </a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

@endsection

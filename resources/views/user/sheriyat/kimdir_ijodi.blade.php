@extends('user.master')
@section('title','Murodiy ijodi')
@section('content')


    <section class="header1 cid-t7d05wN2Ca mbr-parallax-background" id="header1-24">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>{{$shoir->name}}
                            @if($lang=="uz")
                            ijodi
                            @endif
                            @if($lang=="uz")
                                creature
                            @endif
                            @if($lang=="uz")
                                творчество
                            @endif
                        </strong></h1>


                </div>
            </div>
        </div>
    </section>

    <section class="features16 cid-t7d1dGZqYW" id="features17-27">


        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="image-wrapper">
                            <img src="/photo/{{$shoir->photo}}" alt="foto">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-5">
                                @if($lang=="uz")
                                <strong>{{$shoir->title_uz}}</strong></h6>
                            @endif @if($lang=="ru")
                                <strong>{{$shoir->title_ru}}</strong></h6>
                            @endif @if($lang=="en")
                                <strong>{{$shoir->title_en}}</strong></h6>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@foreach($sherlar as $sherr)
    <section class="content7 cid-t7d29CJf4X" id="content7-2b">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <blockquote class="mbr-fonts-style display-4">
                        <h5 class="mbr-section-title mbr-fonts-style mb-2"><strong>

                                @if($lang=="uz")
                                    {{$sherr->title_uz}}
                                @endif
                                    @if($lang=="ru")
                                        {{$sherr->title_ru}}

                                @endif
                                    @if($lang=="en")
                                        {{$sherr->title_en}}

                                @endif
                            </strong></h5>
                        <div><strong>
                                @if($lang=="uz")
                                    {{$sherr->matn_uz}}
                                @endif
                                @if($lang=="ru")
                                    {{$sherr->matn_ru}}

                                @endif
                                @if($lang=="en")
                                    {{$sherr->matn_en}}

                                @endif
                            </strong></div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endforeach

@endsection

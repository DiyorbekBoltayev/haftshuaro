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
                            @if($lang=="en")
                                creature
                            @endif
                            @if($lang=="ru")
                                творчество
                            @endif
                        </strong></h1>


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
                        <div> <span class="html-legend"><strong class="text">
                                @if($lang=="uz")
                                    {!!  $sherr->matn_uz!!}
                                @endif
                                @if($lang=="ru")
                                    {!! $sherr->matn_ru !!}

                                @endif
                                @if($lang=="en")
                                    {!! $sherr->matn_en !!}

                                @endif
                            </strong></span></div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endforeach

@endsection

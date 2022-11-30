@extends('user.master')
@section('title')
    @lang('public.kutubxona')
@endsection
@section('content')
    <section class="header1 cid-t7d3kQtcNT mbr-parallax-background" id="header1-2g">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                        <strong>
                            @lang('public.kutubxona')
                        </strong>
                    </h1>

                </div>
            </div>
        </div>
    </section>

    <section class="content2 cid-t7d3pAKs0s" id="content2-2h">
        <div class="container">
            <div class="row mt-4">
                <!--                --><?php //$d = 0;  ?>
                @foreach( $data as $dat )
                    @if($dat->status == 0 )
                        {{--                        <?php  $d++;  ?>--}}
                        <div style="box-shadow: 0px 0px 5px 5px #d4dff4" class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="/kutubxona/{{$dat->photo}}" alt="Bu rasm">
                                </div>
                                <div class="item-content">
                                    <h4 class="item-title mbr-fonts-style display-6">
                                        @if( $lang == "uz" )
                                         Kitob:  {{$dat->name_uz}}
                                        @endif
                                        @if( $lang == "en" )
                                                Book:  {{$dat->name_en}}
                                        @endif
                                        @if( $lang == "ru" )
                                                Книга:    {{$dat->name_ru}}
                                        @endif

                                    </h4><hr>
                                    <p >


                                            @if( $lang == "uz" )
                                            Muallif:  {{$dat->outor_uz}}
                                            @endif
                                            @if( $lang == "en" )
                                                    Author :   {{$dat->outor_en}}
                                            @endif
                                            @if( $lang == "ru" )
                                                    Автор: {{$dat->outor_ru}}
                                            @endif

                                    </p><hr>
{{--                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">--}}
{{--                                        @if( $lang == "uz" )--}}
{{--                                            {!! $dat->desc_uz !!}--}}
{{--                                        @endif--}}
{{--                                        @if( $lang == "en" )--}}
{{--                                            {!!$dat->desc_en  !!}--}}
{{--                                        @endif--}}
{{--                                        @if( $lang == "ru" )--}}
{{--                                            {!! $dat->desc_ru !!}--}}
{{--                                        @endif--}}
{{--                                    </p>--}}
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{route('front.yukla',$dat->id)}}"
                                                                                 class="btn item-btn btn-primary display-7">
                                        <span class="mobi-mbri mobi-mbri-download mbr-iconfont mbr-iconfont-btn"></span>
                                        @if( $lang == "uz" )
                                            Yuklab olish
                                        @endif
                                        @if( $lang == "en" )
                                            Download
                                        @endif
                                        @if( $lang == "ru" )
                                            Скачать
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{--                        @if($d==3)--}}
                        {{--                            @break--}}
                        {{--                        @endif--}}
                    @endif
                @endforeach

{{--                <div class="container">--}}
{{--                    <div class="row justify-content-center">--}}

{{--                        @if ($data->links())--}}
{{--                            <div class="mt-4 p-4 box has-text-centered">--}}
{{--                                {{ $data->links() }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </section>

@endsection

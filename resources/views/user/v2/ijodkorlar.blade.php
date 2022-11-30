@extends('user.master')
@section('title')
    @lang('public.t_2_2')
@endsection
@section('content')
    <section class="header1 cid-t79FXPTzxw mbr-parallax-background" id="header1-r">


        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            @lang('public.t_2_6')
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>
    <section  class="team2 cid-toDx68BVDe" xmlns="http://www.w3.org/1999/html" id="team2-3">


        <div class="container">
            @foreach($shoirlar as $shoir)
            <div style="box-shadow: 0px 0px 5px 5px #d4dff4"  class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4">
                            <div class="image-wrapper">
                                <img src='{{asset("photo/$shoir->photo")}}' alt="Mobirise">
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <h5 class="card-title mbr-fonts-style m-0 display-5">
                                    <strong>{{$shoir->name}}</strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style display-7">
                                    {!! substr($shoir['title_'.$lang],0,200)!!}...<br>
                                    <a href="{{route('front.kimdir_ijodi',$shoir->id)}}" class="btn btn-outline-primary">@lang('public.ijod_n_t')➜ </a>

                                </p>
                                <p class="mbr-text mbr-fonts-style display-7">
                                </p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection

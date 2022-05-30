@extends('user.master')
@section('title','Fotogalereya')
@section('content')
    </section>
<section class="header1 cid-t78K6E0k5H mbr-parallax-background" id="header1-e">


    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Fotogalereya</strong></h1>


            </div>
        </div>
    </div>
</section>
@foreach($data as $d)
<section class="content5 cid-t78Kpe8cTn" id="content5-g">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>{{$d->header_ru}}</strong>
                </h3>

                <p class="mbr-text mbr-fonts-style display-7">{{$d->text_ru}}</p>
            </div>
        </div>
    </div>
</section>

<section class="image4 cid-t78KjRV1zs" id="image4-f">


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="photo1/{{$d->photo1}}" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        {{$d->outor1_ru}}</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="photo2/{{$d->photo2}}" alt="Mobirise">
                    <p class="mbr-text mbr-fonts-style mt-2 align-center display-4">
                        {{$d->outor2_ru}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<br>
<br>
@endsection

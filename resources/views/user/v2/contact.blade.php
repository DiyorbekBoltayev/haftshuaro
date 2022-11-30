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
                            @lang('public.contact')
                        </strong>
                    </h1>


                </div>
            </div>
        </div>
    </section>
    <section class="form5 cid-toHe6C9JQO" id="form5-8">


        <div  class="container">

            <div class="row justify-content-center mt-4">
                <div style="box-shadow: 0px 0px 5px 5px #dadaed ;padding: 20px;" class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="{{route('admin.massage.store')}}" method="POST" class="mbr-form form-with-styler" >
@csrf
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group" data-for="name">
                                <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-8">
                            </div>
                            <div class="col-md col-sm-12 form-group" data-for="email">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-8">
                            </div>
                            <div class="col-12 form-group" data-for="url">
                                <input type="text" name="title" placeholder="Title"  class="form-control" value="" id="url-form5-8">
                            </div>
                            <div class="col-12 form-group" data-for="textarea">
                                <textarea name="massage" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-8"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4"> <span style="font-size: 30px; margin-bottom: 4px;">📨</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

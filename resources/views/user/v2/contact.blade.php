@extends('user.master')
@section('title')
    @lang('public.t_2_2')
@endsection
@section('content')
    <section style="background-image: url('{{asset('fr/zrs.webp')}}')" class="form5 cid-toHe6C9JQO" id="form5-8">
        <div  class="container">
            <h1 class="text-center mbr-section-title mbr-fonts-style mb-3 display-2">
                <strong>
                    @lang('public.contact')
                </strong>
            </h1>
            <div class="row justify-content-center mt-4">
                <div style="box-shadow: 0px 0px 5px 5px #dadaed ;padding: 20px;" class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="{{route('admin.massage.store')}}" method="POST" class="mbr-form form-with-styler" >
@csrf
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group" data-for="name">
                                <input type="text" name="name" required placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-8">
                            </div>
                            <div class="col-md col-sm-12 form-group" data-for="email">
                                <input type="email" name="email" required placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-8">
                            </div>
                            <div class="col-12 form-group" data-for="url">
                                <input type="text" name="title"  required placeholder="Title"  class="form-control" value="" id="url-form5-8">
                            </div>
                            <div class="col-12 form-group" data-for="textarea">
                                <textarea name="massage" required placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-8"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4"> @lang('public.zzz')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(\Illuminate\Support\Facades\Session::get('ok')=='saved')
        Swal.fire(
            "@lang('public.sended')",
            ' ',
            'success'
        )
        @endif
    </script>
@endsection

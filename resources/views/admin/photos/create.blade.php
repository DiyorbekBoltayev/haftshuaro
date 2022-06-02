@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Rasm qo`shish </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Xatolik!.. </strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.photos.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="barbers"> Mavzusi Uzbek</label>
                            <input type="text" name="header_uz" value="{{old('header_uz')}}" class="form-control"
                                   id="header_uz" placeholder="Mavzu uzbekcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi En </label>
                            <input type="text" name="header_en" value="{{old('header_en')}}" class="form-control"
                                   id="header_en" placeholder="Mavzu inglizcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi Ru </label>
                            <input type="text" name="header_ru" value="{{old('header_ru')}}" class="form-control"
                                   id="header_ru" placeholder="Mavzu ruscha" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Matni Uz</label>
                            <textarea class="form-control" name="text_uz" required id="title1_uz" rows="10">
                                {{old('text_uz')}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni En</label>
                            <textarea class="form-control" name="text_en" required id="title1_en" rows="10">
                                {{old('text_en')}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni Ru</label>
                            <textarea class="form-control" name="text_ru" required id="title1_ru" rows="10">
                                {{old('text_ru')}}
                            </textarea>
                        </div>


                        {{--        //Rasm1--}}
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput">Birinchi rasmni yuklang</label>
                            <input type="file" name="photo1" class="form-control " id="floatingInput" required="">
                        </div>


                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Uz </label>
                            <input type="text" name="outor1_uz" value="{{old('outor1_uz')}}"
                                   class="form-control" id="outor1_uz" placeholder=" Rasm muallifi uzbekcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi En </label>
                            <input type="text" name="outor1_en" value="{{old('outor1_en')}}"
                                   class="form-control" id="outor1_en" placeholder=" Rasm muallifi inglizcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Ru </label>
                            <input type="text" name="outor1_ru" value="{{old('outor1_ru')}}"
                                   class="form-control" id="outor1_ru" placeholder=" Rasm muallifi ruscha " required>
                        </div>


                        {{--           //Rasm2--}}
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput">Ikkinchi rasmni yuklang</label>
                            <input type="file" name="photo2" class="form-control " id="floatingInput" required="">
                        </div>


                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Uz </label>
                            <input type="text" name="outor2_uz" value="{{old('outor2_uz')}}"
                                   class="form-control" id="outor2_uz" placeholder=" Rasm muallifi uzbekcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi En </label>
                            <input type="text" name="outor2_en" value="{{old('outor2_en')}}"
                                   class="form-control" id="outor2_en" placeholder=" Rasm muallifi inglizcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Ru </label>
                            <input type="text" name="outor2_ru" value="{{old('outor2_ru')}}"
                                   class="form-control" id="outor2_ru" placeholder=" Rasm muallifi ruscha " required>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'title1_uz' );
        CKEDITOR.replace( 'title1_ru' );
        CKEDITOR.replace( 'title1_en' );
    </script>
@endsection



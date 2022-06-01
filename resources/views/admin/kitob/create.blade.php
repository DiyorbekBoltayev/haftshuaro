@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kitob qo`shish </h1></div>
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


                    <form action="{{route('admin.kitob.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for=""> Kitob nomi UZ</label>
                            <input type="text" name="name_uz" value="{{old('name_uz')}}" class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for=""> Kitob nomi EN</label>
                            <input type="text" name="name_en" value="{{old('name_en')}}" class="form-control"
                                    required>
                        </div>
                        <div class="form-group">
                            <label for=""> Kitob nomi RU</label>
                            <input type="text" name="name_ru" value="{{old('name_ru')}}" class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="desc_uz">Qisqacha izoh UZ</label>
                            <textarea class="form-control" name="desc_uz" id="desc_uz" rows="4" >{{old('desc_uz')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="desc_en">Qisqacha izoh EN</label>
                            <textarea class="form-control" name="desc_en" id="desc_en" rows="4" >{{old('desc_en')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="desc_ru">Qisqacha izoh RU</label>
                            <textarea class="form-control" name="desc_ru" id="desc_ru" rows="4" >{{old('desc_ru')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="outor_uz"> Muallif UZ</label>
                            <input type="text" name="outor_uz" value="{{old('outor_uz')}}" class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="outor_en"> Muallif EN</label>
                            <input type="text" name="outor_en" value="{{old('outor_en')}}" class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="outor_ru"> Muallif RU</label>
                            <input type="text" name="outor_ru" value="{{old('outor_ru')}}" class="form-control"
                                   required>
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Rasm yuklang </label>
                            <input type="file" name="photo" class="form-control " id="floatingInput" required="" >
                        </div>
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Kitob faylini yuklang</label>
                            <input type="file" name="file" class="form-control " id="floatingInput" required="" >
                        </div>
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Kitob turini tanlang </label><br>

                            <input type="radio" id="age1" checked name="status" value="0">
                            <label for="age1">Oddiy</label><br>
                            <input type="radio" id="age2" name="status" value="1">
                            <label for="age2">Durdona to'plamlar</label><br>
                            <input type="radio" id="age3" name="status" value="2">
                            <label for="age3">Eng sara asarlar</label>

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
        CKEDITOR.replace( 'desc_uz' );
        CKEDITOR.replace( 'desc_ru' );
        CKEDITOR.replace( 'desc_en' );
    </script>
@endsection



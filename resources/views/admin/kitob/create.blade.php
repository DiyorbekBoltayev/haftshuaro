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
                            <select class="form-control" required name="shoir_id" id="building">
                                <option value="">--------</option>
                                @foreach($poets as $poet)
                                    <option value="{{$poet->id}}">{{$poet->name_uz}}</option>
                                @endforeach
                            </select>


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



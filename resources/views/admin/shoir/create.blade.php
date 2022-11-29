@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Turkum qo`shish </h1></div>
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


                    <form action="{{route('admin.shoir.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="description"> Nomi UZ </label>
                            <input type="text" name="name_uz" value="{{old('name')}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div> <div class="form-group">
                            <label for="description"> Nomi RU </label>
                            <input type="text" name="name_ru" value="{{old('name')}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div> <div class="form-group">
                            <label for="description"> Nomi EN </label>
                            <input type="text" name="name_en" value="{{old('name')}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
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
        CKEDITOR.replace( 'title_uz' );
        CKEDITOR.replace( 'title_ru' );
        CKEDITOR.replace( 'title_en' );
    </script>
@endsection



@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Shoir qo`shish </h1></div>
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
                            <label for="description"> Ismi </label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div>
                        <div class="form-group">
                            <label for="description"> Malumoti Uz </label>
                            <textarea class="form-control" name="title_uz" id="title_uz" rows="6" >
                                {{old('title_uz')}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description"> Malumoti En </label>
                            <textarea class="form-control" name="title_en" id="title_en" rows="10" >
                                {{old('title_en')}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description"> Malumoti Ru </label>
                            <textarea class="form-control" name="title_ru" id="title1_ru" rows="10" >
                                {{old('title_ru')}}
                            </textarea>
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Rasmini yuklang </label>
                            <input type="file" name="photo" class="form-control " id="floatingInput" required="" >
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



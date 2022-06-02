@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> She'r qo`shish </h1></div>
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


                    <form action="{{route('admin.sher.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="barbers"> Mavzusi Uz </label>
                            <input type="text" name="title_uz" value="{{old('title_uz')}}" class="form-control"
                                   id="title_uz" placeholder="Mavzu uzbekcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi En </label>
                            <input type="text" name="title_en" value="{{old('title_en')}}" class="form-control"
                                   id="title_en" placeholder="Mavzu inglizcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi Ru </label>
                            <input type="text" name="title_ru" value="{{old('title_ru')}}" class="form-control"
                                   id="title_ru" placeholder="Mavzu ruscha" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Matni Uz</label>
                            <textarea class="form-control" required  name="matn_uz" id="matn_uz"
                                      rows="10">{{old('matn_uz')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni En</label>
                            <textarea class="form-control" required name="matn_en" id="matn_en"
                                      rows="10">{{old('matn_en')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni Ru</label>
                            <textarea class="form-control" required name="matn_ru" id="matn_ru"
                                      rows="10">{{old('matn_ru')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="header_ru"> Shoirni tanlang</label>
                            <select class="form-control" required name="shoir_id" id="building">
                                <option value="">Shoirni tanlang</option>
                                @foreach($poets as $poet)
                                    <option value="{{$poet->id}}">{{$poet->name}}</option>
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
        CKEDITOR.replace( 'matn_uz' );
        CKEDITOR.replace( 'matn_ru' );
        CKEDITOR.replace( 'matn_en' );
    </script>
@endsection




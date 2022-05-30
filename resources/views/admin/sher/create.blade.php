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


                    <form action="{{route('admin.photos.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="barbers"> Mavzusi Uzbek</label>
                            <input type="text" name="header_uz" value="{{old('header_uz')}}" class="form-control"
                                   id="header_uz" placeholder="Mavzu uzbekcha" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Matni Uz</label>
                            <textarea class="form-control" name="text_uz" id="title1_uz" rows="10" >{{old('text_uz')}}</textarea>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




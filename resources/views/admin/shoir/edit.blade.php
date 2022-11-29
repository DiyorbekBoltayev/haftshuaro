@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Shoir tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.shoir.update', $poet->id)}}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="description"> Nomi UZ </label>
                            <input type="text" name="name_uz" value="{{$poet->name_uz}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div> <div class="form-group">
                            <label for="description"> Nomi RU </label>
                            <input type="text" name="name_ru" value="{{$poet->name_ru}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div> <div class="form-group">
                            <label for="description"> Nomi EN </label>
                            <input type="text" name="name_en" value="{{$poet->name_en}}" class="form-control"
                                   id="name" placeholder=" Ismi " required>
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary" onclick="end()"> Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


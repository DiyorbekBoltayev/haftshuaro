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
                            <label for="barbers"> Ismi </label>
                            <input type="text" name="name" value="{{ $poet->name }}" class="form-control"
                                   id="name" placeholder="Mavzu uzbekcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Ma`lumoti Uz </label>
                            <input type="text" name="title_uz" value="{{ $poet->title_uz }}" class="form-control"
                                   id="title_uz" placeholder="Ma`lumoti uzbekcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Ma`lumoti En </label>
                            <input type="text" name="title_en" value="{{ $poet->title_en }}" class="form-control"
                                   id="title_en" placeholder="Ma`lumoti inglizcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Ma`lumoti RU </label>
                            <input type="text" name="title_ru" value="{{ $poet->title_ru }}" class="form-control"
                                   id="title_ru" placeholder="Ma`lumoti ruscha" required>
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Avvalgi rasm </label>
                            <img style="width: 200px; height: 200px;" src="/photo/{{$poet->photo}}" alt="Bu rasm">
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Yangi rasmni yuklang</label>
                            <input type="file" name="photo" class="form-control " id="floatingInput">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary" onclick="end()"> Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


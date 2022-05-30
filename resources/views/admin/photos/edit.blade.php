@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Rasm tahrirlash </h1></div>
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


                    <form action="{{route('admin.photos.update',$foto->id)}}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="barbers"> Mavzusi Uzbek</label>
                            <input type="text" name="header_uz" value="{{ $foto->header_uz }}" class="form-control"
                                   id="header_uz" placeholder="Mavzu uzbekcha" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi En </label>
                            <input type="text" name="header_en" value="{{ $foto->header_en }}" class="form-control"
                                   id="header_en" placeholder="Mavzu inglischa" required>
                        </div>
                        <div class="form-group">
                            <label for="barbers"> Mavzusi Ru </label>
                            <input type="text" name="header_ru" value="{{ $foto->header_ru }}" class="form-control"
                                   id="header_ru" placeholder="Mavzu ruscha" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Matni Uz</label>
                            <textarea class="form-control" name="text_uz" id="title1_uz" rows="10" >
                                {{ $foto->text_uz }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni En</label>
                            <textarea class="form-control" name="text_en" id="title1_en" rows="10">
                                {{ $foto->text_en }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Matni Ru</label>
                            <textarea class="form-control" name="text_ru" id="title1_ru" rows="10" >
                                {{ $foto->text_ru }}
                            </textarea>
                        </div>


             {{-- //Rasm1--}}
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput">Birinchi rasm </label>
                            <img style="width: 200px; height: 200px;" src="/photo1/{{$foto->photo1}}" alt="Bu rasm">
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Yangi birinchi rasmni yuklang</label>
                            <input type="file" name="photo1" class="form-control " id="floatingInput">
                        </div>

                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Uz </label>
                            <input type="text" name="outor1_uz" value="{{ $foto->outor1_uz }}"
                                   class="form-control" id="outor1_uz" placeholder=" Rasm muallifi uzbekcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi En </label>
                            <input type="text" name="outor1_en" value="{{ $foto->outor1_en }}"
                                   class="form-control" id="outor1_en" placeholder=" Rasm muallifi inglischa " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Ru </label>
                            <input type="text" name="outor1_ru" value="{{ $foto->outor1_ru }}"
                                   class="form-control" id="outor1_ru" placeholder=" Rasm muallifi ruscha " required>
                        </div>


            {{--  //Rasm2--}}
                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput">Ikkinchi rasmn </label>
                            <img style="width: 200px; height: 200px;" src="/photo2/{{$foto->photo2}}" alt="Bu rasm">
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Yangi ikkinchi rasmni yuklang</label>
                            <input type="file" name="photo2" class="form-control " id="floatingInput" >
                        </div>

                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Uz </label>
                            <input type="text" name="outor2_uz" value="{{ $foto->outor2_uz }}"
                                   class="form-control" id="outor2_uz" placeholder=" Rasm muallifi uzbekcha " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi En </label>
                            <input type="text" name="outor2_en" value="{{ $foto->outor2_en }}"
                                   class="form-control" id="outor2_en" placeholder=" Rasm muallifi inglischa " required>
                        </div>
                        <div class="form-group">
                            <label for="title1_uz"> Rasm muallifi Ru </label>
                            <input type="text" name="outor2_ru" value="{{ $foto->outor2_ru }}"
                                   class="form-control" id="outor2_ru" placeholder=" Rasm muallifi ruscha " required>
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary" onclick="end()"> Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script>

        function end() {
            let min = $('#start_time').val();
            let max = $('#end_time').val();

            if (min > max) {
                swal({
                    icon: 'error',
                    title: 'Xatolik',
                    text: 'Kelish vaqti Ketish vaqtidan  kichik bolishi kerak.',
                    confirmButton: 'Continue',
                })
                $('#end_time').val('');
                $('#start_time').val('');
            }
        }


    </script>

@endsection

@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Sartaroshni tahrirlash</h1></div>
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


                    <form action="{{route('admin.barber.update',$barbers->id)}}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Sartarosh nomi</label>
                            <input type="text" name="barber_name" value="{{$barbers->barber_name}}" class="form-control"
                                   id="header_ru" placeholder="Barber Name">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Telefon raqami </label>
                            <input type="tel" name="barber_phone_number" value="{{$barbers->barber_phone_number}}"
                                   class="form-control" id="header_ru" placeholder="Barber Phone">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Manzili</label>
                            <input type="text" name="barber_home_adress" value="{{$barbers->barber_home_adress}}"
                                   class="form-control" id="header_ru" placeholder="Hom Adress">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Passport Seriyasi</label>
                            <input type="taxt" name="passport_number" value="{{$barbers->passport_number}}"
                                   class="form-control" id="header_ru" placeholder="AA 0000000">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Kelish vaqti</label>
                            <input type="time" min='09:00' max='22:00' name="start_time"
                                   value="{{$barbers->start_time}}" class="form-control" id="start_time" required>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ketish vaqti</label>
                            <input type="time" min='09:00' max='22:00' name="end_time" value="{{$barbers->end_time}}"
                                   class="form-control" id="end_time" required>
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

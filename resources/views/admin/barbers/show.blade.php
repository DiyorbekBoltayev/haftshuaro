@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.barber.index')}}" class="btn btn-primary">Sartaroshlarga qaytish</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Sartarosh Id</th>
                            <td>{{$barbers->id}}</td>
                        </tr>
                        <tr>
                            <th>Sartarosh nomi</th>
                            <td>{{$barbers->barber_name}}</td>
                        </tr>
                        <tr>
                            <th>Telefon raqami </th>
                            <td>{{$barbers->barber_phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Manzili</th>
                            <td>{{$barbers->barber_home_adress}}</td>
                        </tr>
                        <tr>
                            <th>Passport</th>
                            <td>{{$barbers->passport_number}}</td>
                        </tr>
                        <tr>
                            <th>Kelish vaqti</th>
                            <td>{{$barbers->start_time}}</td>
                        </tr>
                        <tr>
                            <th>Ketish vaqti</th>
                            <td>{{$barbers->end_time}}</td>
                        </tr>
                        <tr>
                            <th>Kiritildi</th>
                            <td>{{$barbers->created_at}}</td>
                        </tr>

{{--                        <tr>--}}
{{--                            <th>Xonadoshlari</th>--}}
{{--                            <td>--}}
{{--                                @if(count($sheriklar)>1)--}}
{{--                                    @foreach($sheriklar as $sh)--}}
{{--                                        @if($sh->id==$data->id) @continue @endif--}}
{{--                                        <a href="{{route('admin.students.show',$sh->id)}}">{{$sh->surname}} {{$sh->name}} {{ $sh->f_s_name }}</a>--}}
{{--                                        <br>--}}
{{--                                    @endforeach--}}
{{--                                @else--}}
{{--                                    <h3>Yolg'iz turadi</h3>--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                        </tr>--}}

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

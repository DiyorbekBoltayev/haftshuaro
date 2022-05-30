@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Kitoblar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.kitob.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Kitob qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Nomi</th>
                            <th class="" scope="col"> Izoh</th>
                            <th class="" scope="col"> Muallif </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($data->currentpage()-1)*($data->perpage())+$ind+1}}</td>
                                <td>{{$poet->name_uz}}</td>
                                <td>{{$poet->desc_uz}}</td>
                                <td>{{$poet->outor_uz}}</td>

                                <td class="col-2">
                                    <form action="{{ route('admin.kitob.destroy',$poet->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.kitob.edit',$poet->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($data->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $data->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

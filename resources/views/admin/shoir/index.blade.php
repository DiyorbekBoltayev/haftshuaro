@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Shoirlar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.shoir.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Shoir qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Rasm </th>
                            <th class="" scope="col"> Ism </th>
                            <th class="" scope="col"> Malumot </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($poets as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($poets->currentpage()-1)*($poets->perpage())+$ind+1}}</td>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="/photo/{{$poet->photo}}" alt="Bu rasm">
                                </td>
                                <td>{{$poet->name}}</td>
                                <td>{!! $poet->title_uz !!}</td>

                                <td class="col-2">
                                    <form action="{{ route('admin.shoir.destroy',$poet->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.shoir.edit',$poet->id) }}">
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

                            @if ($poets->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $poets->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

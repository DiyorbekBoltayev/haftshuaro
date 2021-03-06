@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Rasmlar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.photos.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                           Rasm qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Mavzu </th>
                            <th class="" scope="col"> Rasm1 </th>
                            <th class="" scope="col"> Autor1 </th>
                            <th class="" scope="col"> Rasm2 </th>
                            <th class="" scope="col"> Autor2 </th>

                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($fotos as $ind=>$foto)
                            <tr>
                                <td class="col-1">{{($fotos->currentpage()-1)*($fotos->perpage())+$ind+1}}</td>
                                <td>{{$foto->header_uz}}</td>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="/photo1/{{$foto->photo1}}" alt="Bu rasm">
                                </td>
                                <td>{{$foto->outor1_uz}}</td>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="/photo2/{{$foto->photo2}}" alt="Bu rasm">
                                </td>
                                <td>{{$foto->outor2_uz}}</td>

                                <td class="col-2">
                                    <form action="{{ route('admin.photos.destroy',$foto->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.photos.edit',$foto->id) }}">
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

                        @if ($fotos->links())
                            <div class="mt-4 p-4 box has-text-centered">
                                {{ $fotos->links() }}
                            </div>
                        @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

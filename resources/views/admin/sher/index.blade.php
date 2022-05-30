@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> She'rlar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.sher.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            She'r qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Mavzu</th>
                            <th class="" scope="col"> Matin</th>
                            <th class="" scope="col"> Autor</th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($poems as $ind=>$poem)
                            @foreach($poets as $poet)
                                @if( $poem->shoir_id == $poet->id )
                                    <tr>
                                        <td class="col-1">{{($poems->currentpage()-1)*($poems->perpage())+$ind+1}}</td>
                                        <td>{{$poem->title_uz}}</td>
                                        <td>{{$poem->matn_uz}}</td>
                                        <td>{{$poet->name}}</td>


                                        <td class="col-2">
                                            <form action="{{ route('admin.sher.destroy',$poem->id) }}" method="POST">
                                                <a class="btn btn-warning btn-sm"
                                                   href="{{ route('admin.sher.edit',$poem->id) }}">
                                                    <span class="btn-label">
                                                        <i class="fa fa-pen"></i>
                                                    </span>

                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <span class="btn-label">
                                                         <i class="fa fa-trash"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach

                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($poems->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $poems->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

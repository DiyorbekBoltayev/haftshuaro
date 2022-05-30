@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Ijodkorlar </h1></div>
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
                            <th class="" scope="col"> Mavzu </th>
                            <th class="" scope="col"> Rasm1 </th>
                            <th class="" scope="col"> Autor1 </th>
                            <th class="" scope="col"> Rasm2 </th>
                            <th class="" scope="col"> Autor2 </th>

                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

{{--                    <div class="container">--}}
{{--                        <div class="row justify-content-center">--}}

{{--                            @if ($fotos->links())--}}
{{--                                <div class="mt-4 p-4 box has-text-centered">--}}
{{--                                    {{ $fotos->links() }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection

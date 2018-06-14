@extends('layouts.default_template')

@section('title_page')
    Province
@endsection

@section('active_home')
active
@endsection

@section('content')

    <div class="jumbotron jumbotron-fluid jumbo-head">
        <div class="container-fluid">
            <h1 class="display-3">Province List ({{count($province)}})</h1>
        </div>
    </div>

    <div class="container-fluid blog-content">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name (th)</th>
                    <th>Name (eng)</th>
                    <th>GEO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($province as $pv)
                <tr>
                    <td>{{$pv->province_id}}</td>
                    <td>{{$pv->province_code}}</td>
                    <td>{{$pv->province_name}}</td>
                    <td>{{$pv->province_name_eng}}</td>
                    <td>{{$pv->geo_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         {{$province->links('pages.pagination_default')}}
     </div>

@endsection
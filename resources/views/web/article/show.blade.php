@extends('web.layout')
@section('title')
Articles
@endsection
@section('content')
<div id="main">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <a href="{{asset("images/$articles->img")}}" class="image fit thumb"><img src="{{asset("images/$articles->img")}}" alt="" /></a>
                            <th><h3>{{$articles->title}}</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$articles->content}}</td>
                    </tbody>
                </table>
                <ul class="actions">
                        <li><a href="{{url()->previous()}}" class="button">Back</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>
</div>
@endsection


@extends('web.layout')
@section('title')
Articles
@endsection
@section('content')
<div id="main">
<section id="one">
    <h2>Articles</h2>
    <div class="row">
        @foreach($articles as $article)
        <article class="6u 12u$(xsmall) work-item">
            <a href="{{asset("images/$article->img")}}" class="image fit thumb"><img src="{{asset("images/$article->img")}}" alt="" /></a>
            <a href="{{url("/articles/show/$article->id")}}"><h3>{{$article->title}}</h3></a>
        </article>
        @endforeach
        <ul class="actions">
                        <li><a href="{{url()->previous()}}" class="button">Back</a></li>
        </ul>
    </div>
</section>
</div>
@endsection

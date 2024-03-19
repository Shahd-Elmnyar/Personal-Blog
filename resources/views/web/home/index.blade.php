@extends('web.layout')
@section('title')
Home page
@endsection
@section('content')
<!-- Main -->
<div id="main">

    <!-- One -->
    <section id="one">
        <h2>Article</h2>
        <div class="row">
            @foreach($articles as $article)
            <article class="6u 12u$(xsmall) work-item">
                <a href="{{asset("images/$article->img")}}" class="image fit thumb"><img src="{{asset("images/$article->img")}}" alt="" /></a>
                <a href="{{url("/articles/show/$article->id")}}">
                    <h3>{{$article->title}}</h3>
                </a>
            </article>
            @endforeach
        </div>
        <ul class="actions">
            <li><a href="{{url('/articles')}}" class="button">Show All Articles</a></li>
        </ul>
    </section>
    <section id="two">
        <header class="major">
            <h2> About Me</h2>
        </header>
        <p> Hey there! 👋 I'm Shahd , a backend developer with expertise in Laravel.
            I have a talent for turning ideas into robust web solutions.
            When I'm not coding, you can find me exploring new technologies,
            sipping coffee, or lost in a good book.
            Join me on this journey as I share insights, tips, and stories about my experiences in the world of web development. Let's connect, learn, and grow together!</p>
        <!-- <ul class="actions">
							<li><a href="#" class="button">Read more</a></li>
						</ul> -->
    </section>
    <!-- three -->
    <section id="three">
        <h2>Contact me</h2>
        <p>Feel free to reach out to me for any inquiries, collaborations, or just to say hello! </p>
        <div class="row">
            <div class="8u 12u$(small)">
                @include('web.inc.messages')
                <form method="post" action="{{url("/message/send")}}">
                    @csrf
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                        <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                        <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                    </div>
                    <br>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </form>
            </div>
            <div class="4u$ 12u$(small)">
                <ul class="labeled-icons">
                    <li>
                        <h3 class="icon fa-home"><span class="label">Address</span></h3>
                        Egypt , Damietta
                    </li>
                    <li>
                        <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                        000-123-4567
                    </li>
                    <li>
                        <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                        <a href="#">shahdmohamed2632003@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection

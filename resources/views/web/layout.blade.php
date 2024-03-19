<!DOCTYPE HTML>
<html>
	<head>
		<title>
            @yield('title')
        </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<a href="{{asset('images/profile.jpg')}}" class="image avatar"><img src="{{asset('images/profile.jpg')}}" alt="" /></a>
				<h1><strong>I am Shahd Elmnyar</strong><br/>
                Backend developer<br/>
                PHP laravel</h1>

                <section id="sidebar">
                    <div class="inner">
                        <nav>
                            <ul class="menu">
                                <li><a href="{{url('/')}}" class="page-scroll">Home</a></li>
                                <li><a href="{{url('/#one')}}" class="page-scroll">Articles</a></li>
                                <li><a href="{{url('/#two')}}" class="page-scroll">About me</a></li>
                                <li><a href="{{url('/#three')}}" class="page-scroll">Contact me</a></li>
                                <li><a href="{{url('/login')}}" class="page-scroll">Admin</a></li>

                            </ul>
                        </nav>
                    </div>
                </section>
			</header>
            @yield('content')



		<!-- Footer -->
        <footer id="footer">
				<ul class="icons">
                    <li><a href="https://www.facebook.com/shahd.elmnyar?mibextid=ZbWKwL" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/shahd_elmnyar?igsh=N3NjM2Z2b3I5Y3Rw" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="https://www.linkedin.com/in/shahd-elmnyar-6ba009266?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Shahd</li><li> By <a href="#">Shahd</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="{{asset('/js/jquery.min.js')}}"></script>
			<script src="{{asset('/js/jquery.poptrox.min.js')}}"></script>
			<script src="{{asset('/js/skel.min.js')}}"></script>
            <script src="{{asset('/js/jquery.scrollex.min.js')}}"></script>
            <script src="{{asset('/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{asset('/js/main.js')}}"></script>

	</body>
</html>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Autoturism</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-3.3.6-dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome-4.5.0/css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="logreg">

                @auth
                    <div>Welcome, {{auth()->user()->name}}</div>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                @endauth

                @guest
				    <li><a href="/login">Login</a></li>
				    <li><a href="/register"><span class="register">Register</span></a></li>
                    <li><a href="send-sms-notification"><span class="register">2FA</a></li>
                @endguest
			</ul>
	</div>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<nav class="navbar navbar-default midle-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
						<h1>SEARCH TEXT</h1>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarmidle">
				<div class="searchtxt">
					<h1>SEARCH TEXT</h1>
				</div>
				<form method="GET" action="/" class="navbar-form navbar-left searchformmargin" role="search">
                    <div class="form-group">
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="search">
                        </label>
                        Search By Name
                        <input class="border border-gray-400 p-2 w-full" type="search" name="search" id="search">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="location">
                        </label>
                        Search By Location
                        <input class="border border-gray-400 p-2 w-full" type="search" name="location" id="location">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="brand">
                        </label>
                        Search By Brand
                        <input class="border border-gray-400 p-2 w-full" type="search" name="brand" id="brand">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="kilometers">
                        </label>
                        Search By Kilometers
                        <input class="border border-gray-400 p-2 w-full" type="search" name="kilometers" id="kilometers">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="price">
                        </label>
                        Search By Price
                        <input class="border border-gray-400 p-2 w-full" type="search" name="price" id="price">
                    </div>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Submit
                        </button>
                    </div>
					{{-- <div class="form-group">
						<input type="text" class="form-control searchform" placeholder="Enter Keyword">
					</div> --}}
				</form>

			</div>
		</nav>
	</div>
</div>
<!-- ____________________Featured Section ______________________________-->
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E D<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
            @foreach ($posts as $post)
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="{{asset('css/image/featurporch.jpg')}}" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>{{$post->name}}</h1>
							<p>{{$post->short}} </p>
			 				<h2>Price &euro; {{$post->price}}</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>{{$post->name}}</h1>
			 						<p>{{$post->body}}</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>

</div>

<script type="text/javascript" src="{{asset('css/bootstrap-3.3.6-dist/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('css/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('css/js/myscript.js')}}"></script>
<script type="text/javascript" src="{{asset('css/bootstrap-3.3.6-dist/js/jquery.1.11.js')}}"></script>
<script type="text/javascript" src="{{asset('css/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>
</body>
</html>

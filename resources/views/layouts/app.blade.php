<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" style = "background:url(https://st2.depositphotos.com/4072575/9728/i/950/depositphotos_97282840-stock-photo-light-brown-background-paper.jpg); background-repeat: no-repeat;
            background-size: cover">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="d-flex shadow-sm border-bottom" >
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-4 py-7 px-2 mx-3" style="background:#778899; height:auto">
        <div class ="float-start my-5 py-2 px-2 mx-3">
		<ul style="list-style-type: none">
			<li><a href ="{{route("dashboard")}}" class="active text-white" style="text-decoration:none"><h5>Dashbord</h5></a></li><br>
			<li><a href ="{{route("Category")}}" class="text-white" style="text-decoration:none"><h5>Category</h5></a></li><br>
			<li><a href ="{{route("Author")}}" class="text-white" style="text-decoration:none"><h5>Author</h5></a></li><br>
			<li><a href ="{{route("LocationRack")}}" class="text-white" style="text-decoration:none"><h5>Location Rack</h5></a></li><br>
			<li><a href ="{{route("Book")}}" class="text-white" style="text-decoration:none"><h5>Book</h5></a></li><br>
			<li><a href ="{{route("IssueBook")}}" class="text-white" style="text-decoration:none"><h5>Issue Book</h5></a></li><br>
            <li><a href ="{{route("Client")}}" class="text-white" style="text-decoration:none"><h5>Client</h5></a></li><br>
			<li><a href ="{{route("welcome")}}" class="text-white" style="text-decoration:none"><h5>Logout</h5></a></li><br>
            
		</ul>
	</div>
        @if(session("success"))
            <div class ="row">
                <div class ="col-6 offset-3">
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                        <p>{{session("success")}}</p>
                        <button type= "button" class ="btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button>
                    </div> 
                </div>
            </div>

        @endif

        @if($errors->any())
            <div class ="row">
                <div class ="col-6 offset-3">
                    <div class = "alert alert-danger alert-dismissible fade show" role = "alert">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                        <button type= "button" class ="btn-close" data-bs-dismiss = "alert" aria-label = "Close"></button>
                    </div> 
                </div>
            </div>
        @endif
            {{ $slot }}
        </main>
    </body>
</html>

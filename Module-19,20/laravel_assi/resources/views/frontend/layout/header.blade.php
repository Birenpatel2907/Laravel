<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Website</title>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
 @include('sweetalert::alert') 
</body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index">
                <i class="fas fa-film mr-2"></i>
                Catalog-Z
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="index">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 active" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact">Contact</a>
                </li>    
				@if(session()->has('name'))
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="">Welcome {{session('name')}}</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="logout">logout</a>
                </li>
				@else
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="signup">Register</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="user">Login</a>
                </li>
				@endif
            </ul>
            </div>
        </div>
    </nav>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fa388adf8c.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa388adf8c.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>

<body>

    <nav class="navbar navbar-expand-md main-nav fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img class="navbrnad" src="https://koderapp.com/assets/img/logo-koder.png" alt="nav">
            </a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item actived">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/manage')}}">Manage</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="section">
            <div class="row">
                <div class="col-md-6 left-section">
                    <img src="https://rb.gy/egtmqs" alt="Profile" class="profile">
                </div>
                <div class="col-md-6 right-section">

                    <h3 class="mt-5"><i>Hi, There!</i></h3>
                    <br>
                    <h5 class="mt-4">Hey I'm PyaeSone,
                        i'm Beginner Web Developer.</h5>
                    <br>

                    <h5 class="mt-3"><i><b>Can I help you with something in your business?</b></i></h5>

                </div>
            </div>
        </div>

        <div class="feature">
            <ul class="list-group">
                <li class="list-item social"><i class="fab fa-html5"></i></li>
                <li class="list-item social"><i class="fab fa-css3"></i></li>
                <li class="list-item social"><i class="fab fa-php"></i></li>
                <li class="list-item social"><i class="fab fa-laravel"></i></li>
                <li class="list-item social"><i class="fab fa-github"></i></li>
                <li class="list-item social"><i class="fab fa-git-alt"></i></li>

            </ul>
        </div>

        <div class="feature-2">
            <div class="paragraph">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, laudantium quibusdam! Fuga voluptas
                    earum harum sit! Rerum ab est repellendus!0
                </p>
            </div>
        </div>

        <div class="footer"></div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

{{-- @extends('layouts.app')

@section('content')

<script src="https://kit.fontawesome.com/fa388adf8c.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/style.css">
<nav class="navbar navbar-expand-md main-nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item actived">
                    <a href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#">Project</a>
                </li>
                <li class="nav-item">
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col-md-6 left-section">
                <img src="https://rb.gy/egtmqs" alt="Profile" class="profile" width="400px">
            </div>
            <div class="col-md-6 right-section">

                <h3 class="mt-5"><i>Hi, There!</i></h3>
                <br>
                <h5 class="mt-4">Hey I'm PyaeSone and Newbie for Codding</h5>
                <br>

                <h5 class="mt-3"><i><b>Can I help you with something in your business?</b></i></h5>

            </div>
        </div>
    </div>

    <div class="feature">
        <ul class="list-group">
            <li class="list-item social"><i class="fab fa-html5"></i></li>
            <li class="list-item social"><i class="fab fa-css3"></i></li>
            <li class="list-item social"><i class="fab fa-php"></i></li>
            <li class="list-item social"><i class="fab fa-laravel"></i></li>
            <li class="list-item social"><i class="fab fa-github"></i></li>
            <li class="list-item social"><i class="fab fa-git-alt"></i></li>

        </ul>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
                {{-- <img class="navbrnad" src="https://koderapp.com/assets/img/logo-koder.png" alt="nav"> --}}
                <div class="code-sign">
                    <div class="code code-1 "></div>
                    <div class="code code-2 "></div>
                    <div class="code code-3 "></div>
                    <div class="code code-4 "></div>
                    <div class="code-middle"></div>
                </div>
            </a>



            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/project') }}">Project</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Log-in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                @endguest
                {{-- @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/manage') }}">Manage</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{url('/logout')}}" method="post" id="logout-form">
                                @csrf
                            </form>
                            <a class="nav-link" type="submit" href=""
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log-out</a>
                        </li>
                    @endauth --}}

                @if (Gate::allows('auth-user'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">Manage</a>
                    </li>
                @endif
                @auth
                    <li class="nav-item">


                        {{-- <a class="nav-link" type="submit" href=""
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log-out
                        </a> --}}
                        <a href="" type="submit" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Logout
                        </a>
                    </li>
                @endauth

                @auth
                    <li class="nav-item">
                        <a href="" class=" nav-link">
                            <b class="badge rounded-pill @if (Auth::user()->status == 'admin')
                                bg-danger @endif bg-warning px-3 pb-2">{{ Auth::user()->name }}</b>
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </nav>

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button> --}}

    <!-- Modal -->


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Are you sure to Logout !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- end of logout alert-box --}}



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
                    <h5 class="mt-3"><i><b>Can I help you with something in your business?</b></i>&#128516;</h5>
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
            @yield('feature-2')
        </div>

        <div class="section-2">
            @yield('section-2')
        </div>

        <div class="contact">
            @yield('contact')
        </div>

        <div class="footer">
            @yield('footer')
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="{{url('js/ui.js')}}"></script>

</body>

</html>

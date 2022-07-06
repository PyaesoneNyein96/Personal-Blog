<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- fontawsome --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/hamburger.css">
    {{-- <script src="public\js\master.js"></script> --}}
    <title>@yield('title')</title>
</head>

<body>

    {{-- <nav class="navbar navbar-expand-md px-2 text-light navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand h5 text-light my-auto" href="{{ url('/admin/dashboard') }}">
                Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto pr-2 navbar-right ">
                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link text-light">Admin Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-light">Home</a>
                    </li>
                </ul>

                <ul class="navbar-nav auth ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }} <span
                                class="badge rounded-pill bg-warning">{{ Auth::user()->status }}</span>
                        </a>

                        <ul class="dropdown-menu w-25" aria-label="navbarDropdown">
                            <li><a class="dropdown-item " href="#">Log out</a></li>

                            href="{{ url('/logout') }}" URL ကိုလဲထည့်လို့ရ

                            <button class="dropdown-item logout" type="submit" onclick="return confirm('Are u sure')">
                                Logout
                            </button>
                            <button class="dropdown-item logout" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Logout
                            </button>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar fixed-top dropdown">
        <a href="{{ url('admin/dashboard') }}" class="navbrand my-auto text-warning">Portfolio</a>

        <ul class="nav-menu nav-menu-tran my-auto">
            <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link ">

                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ url('/') }}" class="nav-link ">Home</a>
            </li>
            <li class="nav-item ">
                <a href="https://tinyurl.com/22xaw8n6" target="_blank" class="nav-link database">Data-base</a>
            </li>

            <li class="nav-item dropdown mx-3 ">
                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="badge bg-danger rounded-pill pb-2 px-2  ">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                    <button class="dropdown-item logout" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    Logout
                </button>
                  </ul>

            </li>

        </ul>


        <div class="hamburger-menu">
            <div class="hamburger line-1"></div>
            <div class="hamburger line-2"></div>
            <div class="hamburger line-3"></div>
        </div>

    </nav>



    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Are u sure to Logout!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            Understood and Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- --- --}}

    <div class="container-fluid mt-3 ">
        <div class="row ">
            <div class="col-2 sidebar">
                <div class="list-group sidebar-list-group">
                    <li class="list-group-item">
                        <a href="#">
                            <i class="fa-solid fa-chart-line"></i>
                            <span class="d-none d-lg-inline">Active Log</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        {{-- <a href="{{url('admin/skills')}}"> --}}
                        <a href="{{ route('skills.index') }}">
                            <i class="fa-solid fa-code"></i>
                            <span class="d-none d-lg-inline">skills</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <i class="fa-solid fa-diagram-project"></i>
                            <span class="d-none d-lg-inline">Project</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="d-none d-lg-inline">Contect</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="d-none d-lg-inline">About</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/users') }}">
                            <i class="fa-solid fa-people-roof "></i>
                            <span class="d-none d-lg-inline">Users Manage</span>
                        </a>
                    </li>

                </div>
            </div>

            <div class="col-10 main g-1 ">

                @yield('content')

            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



    <script src="{{ url('js/master.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="/css/hamburger.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/usertable.css">
    <link rel="stylesheet" href="/css/blogs-admin.css">
    <title>@yield('title')</title>
</head>

<body >




    <nav class="navbar">
       <div class="container-fluid">
        <a href="{{ url('admin/dashboard') }}" class="navbar-brand text-light">Admin Dashboard</a>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/blogs')}}" class="nav-link">Blogs</a>
            </li>
            <li class="nav-item">
                <a href="https://tinyurl.com/22xaw8n6" target="_blank" class="nav-link database">Data-base</a>
            </li>

            <li class="nav-item dropdown pt-2">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="badge bg-danger rounded-pill pb-2 px-3">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <button class="dropdown-item logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Logout
                    </button>
                </ul>
            </li>
        </ul>
       </div>

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

    <div class="container-fluid mt-4 ">
        <div class="row px-0">
            <div class="col-2 sidebar ">
                <div class="list-group sidebar-list-group ">

                    <li class="list-group-item">
                        <a href={{url("admin/dashboard")}} >
                            <i class="fa-solid fa-chart-line"></i>
                            <span class="d-none d-lg-inline">Admin Profile</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('skills.index') }}">
                            <i class="fa-solid fa-code"></i>
                            <span class="d-none d-lg-inline">skills</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('projects.index') }}">
                            <i class="fa-solid fa-diagram-project"></i>
                            <span class="d-none d-lg-inline">Project</span>
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a href="{{ url('admin/Categories') }}">
                            <i class="fas fa-pen-fancy"></i>
                            <span class="d-none d-lg-inline">Categories</span>
                        </a>
                    </li>

                    <li class="list-group-item">
                        <a href="{{url("admin/blogs")}}">
                            <i class="fa-solid fa-newspaper"></i>
                            <span class="d-none d-lg-inline">Blogs</span>
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

            <div class="col-9 main  g-0 mx-1">

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

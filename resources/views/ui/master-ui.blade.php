<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/fa388adf8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">

    <title>@yield('title')</title>
</head>

<body>



    <nav class="navbar">
        <a href="#" class="navbar-brand">
            <div class="code-sign">
                <div class="code code-1 "></div>
                <div class="code code-2 "></div>
                <div class="code code-3 "></div>
                <div class="code code-4 "></div>
                <div class="code-middle code-5"></div>
            </div>
        </a>

        <ul class="nav-menu">

            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link blogsTab" href="{{ url('/blogs') }}">Blogs</a>
            </li>

            @auth

                @if (Gate::allows('auth-user', auth::user()->status))
                    <li class="nav-item">
                        <a href="https://tinyurl.com/22xaw8n6" target="_blank" class="nav-link database">Data-base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">Manage</a>

                    </li>
                @endif

            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Log-in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            @endguest

            @auth
                <li class="nav-item dropdown pt-2">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if (Gate::allows('auth-user', Auth::user()->status))
                            <span class="badge bg-danger rounded-pill pb-2 px-3">{{ Auth::user()->name }}</span>
                        @else
                            <span class="badge bg-info rounded-pill pb-2 px-3">{{ Auth::user()->name }}</span>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <button class="dropdown-item logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Logout
                        </button>
                    </ul>
                </li>
            @endauth
        </ul>

        <div class="hamburger-menu">
            <div class="hamburger line-1"></div>
            <div class="hamburger line-2"></div>
            <div class="hamburger line-3"></div>
        </div>

    </nav>

    {{-- logout alert model --}}

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




    <div class="container-fluid body">

        <div class="intro">
            @yield('intro')
        </div>

        <div class="tools">
            @yield('feature-tools')
        </div>

        <div class="feature-2" id="about">
            @yield('feature-2')
        </div>

        {{-- skill --}}
        <div class="section-2">
            @yield('skill-section')
        </div>

        {{-- blog --}}
        <div class="contact" id="project">
            @yield('project-content')
        </div>
        <div class="blog-content">
            @yield('blogs')
        </div>
        <div class="footer" id="footer">
            @yield('footer')
        </div>
    </div>



    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/ui.js') }}"></script>
    <script src="{{ URL::asset('js/master.js') }}"></script>

</body>

</html>

@extends('ui.master-ui')

@section('title', 'Portfolio')



@section('intro')


    <div class="section">
        <div class="row">
            <div class="col-md-6 left-section">
                <img src="https://rb.gy/egtmqs" alt="Profile" class="profile">
            </div>
            <div class="col-md-6 right-section">

                <h3 class="mt-5 right-text" id="text"><i> </i></h3>
                <br>
                <h5 class="mt-4 right-text">Hey I'm <span class="color-text">PyaeSone</span>,
                    i'm Beginner Web Developer.</h5>
                <br>
                <h5 class="mt-3 right-text"><i><b class="color-text-2">
                            {{-- Can I help you with something in your business? --}}
                            Welcome to my Personal Blog website
                        </b> </i>&#128521;</h5>
            </div>
        </div>
    </div>
@endsection


@section('feature-tools')
    <div class="feature">
        <ul class="list-group px-3">
            <li class="list-item social"><i class="fab fa-html5"></i></li>
            <li class="list-item social"><i class="fab fa-css3"></i></li>
            <li class="list-item social"><i class="fab fa-php"></i></li>
            <li class="list-item social"><i class="fab fa-laravel"></i></li>
            <li class="list-item social"><i class="fab fa-github"></i></li>
            <li class="list-item social"><i class="fab fa-git-alt"></i></li>

        </ul>
    </div>
@endsection

@section('feature-2')
    <div class="row">
        <div class="col aboutme my-5">
            <h3>About Me</h3>
        </div>
    </div>
@endsection

@section('skill-section')
    <div class="container">
        <div class="row my-2">

            <div class="col-md-7 skill-box">
                <div class="skill">
                    <h5 class="text-start text-light position-sticky top-0 btn btn-outline-info">Skills <span
                            class="badge bg-warning">{{ count($skills) }}</span> </h5>
                    @foreach ($skills as $skill)
                        <div class="row">
                            <div class="col-9 progress my-auto">
                                <div class="progress-bar @if ($skill->percent <= '25') bg-danger
                                 @elseif($skill->percent <= '40') bg-warning @elseif($skill->percent >= '50') bg-success @endif"
                                    role="progressbar" style="width: {{ $skill->percent }}% " aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">{{ $skill->percent }}%</div>
                            </div>
                            <div class="col-3 my-2">
                                <div class="bg-secondary badge float-end my-auto">
                                    {{ $skill->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="col-md-5 mt-4 text-center bordered">
                <div class="aboutmeparagraph">
                    <i>
                        <h5 class="">
                            <a href="https://github.com/PyaesoneNyein96" target="_blank" class="nav-link ">Here is my Github
                                address ...</a>
                        </h5>
                    </i>
                    <a href="#" class="nav-link h5">Check my Resume</a>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('project-content')
    <div class="contact">
        <h5 class="project-title text-center my-4">
            My Project
        </h5>
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-6 col-md-4 ">
                        <a href="{{ $project->url }}" target="_blank" class="text-decoration-none">
                            <div class="card project py-4 mb-3">
                                <div class="card-title text-center">
                                    {{ $project->name }}
                                </div>
                                <div class="card-body d-flex justify-content-center">
                                    <i class="fa-solid fa-diagram-project fa-2xl"></i>
                                </div>
                            </div>
                            <div class="caption text-center">
                                {{ $project->name }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 d-flex my-4 justify-content-center mr-4 text-danger">
                    {{ $projects->links() }}
                </div>
            </div>

        </div>

    @endsection


    @section('blogs')

        <div class="container">
            <div class="Blogs mb-4 text-info h5">
                Latest Blogs
            </div>
            <div class="row mt2">
                @foreach ($Blogs as $blog)
                    <div class="col-md-4 col-lg-3 mb-2 index-blog " id="blogs">
                        <div class="card bg-transparent show-blogs pb-3 ">
                            <a href="{{ url("blogs/detail/$blog->id") }}">
                                <div class="card-header ">
                                    <div class="h5 text-info my-0">
                                        {{ $blog->title }}
                                    </div>
                                    <span class="text-white-50 small ">
                                        Date: {{ date('d-M-Y', strtotime($blog->created_at)) }} ,

                                        <span class="text-info small"> {{ strtok($blog->user->name, ' ') }} </span>

                                    </span>
                                </div>

                                <div class="card-body pt-2 mx-0 px-1" style="height: 257px; overflow:hidden">
                                    <img src="{{ asset("storage/blogs-img/$blog->image") }}" alt="imng"
                                        class="img-fluid" style="height: 200px; width:100%">
                                    <div class="text-muted ">
                                        <h5 class="d-inline">
                                            {{ substr($blog->content, 0, 1) }}
                                            {{-- {{ strtok($blog->content, " ",) }} --}}
                                        </h5>
                                        {{ mb_substr($blog->content, 1) . "\n" }}

                                    </div>
                                </div>
                                {{-- <div class="card-footer">
                                <a href="{{route(' Categories.index')}}">Detail Blogs</a>
                            </div> --}}
                            </a>

                        </div>
                    </div>
                @endforeach

                <div class="col-md-4 col-lg-3 mb-2 more-blogs border-light"> {{-- style=" auto;overflow:hidden" --}}
                    <a href="{{ url('blogs/') }}">
                        <div class="card pb-1 bg-transparent text-center">
                            <div class="h2 px-2 mt-2 card-header">
                                More Blogs
                            </div>
                            <div class="row card-body mt-4">
                                @foreach ($moreBlogs as $blog)
                                    <div class="col-6">
                                        <img src="{{ asset("storage/blogs-img/$blog->image") }}" alt="img"
                                            class="image p-2" style="width:100%; height: 100%; ">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>



    @endsection

    @section('footer')
        <div class="container-fluid mx-0 px-0 footer-container">
            {{-- <img src="{{ asset('image/2203_w026_n002_1524b_p1_1524.jpg') }}" class=" footer-img" alt=""> --}}
            <img src="{{ asset('image/background1.jpg') }}" class=" footer-img" alt="">
            <div class="row footer-row">
                <div class="col-2 ">
                    <ul class="list-footer text-start">
                        <li><a href="">Contact</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </div>
                <div class="col-2  ">
                    <ul class="list-footer text-start">
                        <li><a href="">09-xxx-xxx-xxx</a></li>
                        <li><a href="">Skills</a></li>
                        <li><a href="">Management</a></li>
                        <li><a href="">Info</a></li>
                        {{-- <li><a href="">Contact</a></li> --}}

                    </ul>
                </div>
                <div class="col-md-8 footer-7">
                    <div class="footer-head mb-2">
                        Thank you for your time.
                    </div>
                    <p class="footer-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore dolorum minima praesentium
                        explicabo ut, unde beatae atque iure quidem quo esse nisi saepe adipisci ipsum molestias quae
                        repudiandae facere.
                    </p>
                    <div class="d-flex footer-icon">
                        <li><i class="fab fa-facebook mx-2 fa-xl"></i></li>
                        <li><i class="fab fa-instagram mx-2 fa-xl"></i></li>
                        <li><i class="fab fa-twitter mx-2 fa-xl"></i></li>
                        <li><i class="fab fa-github mx-2 fa-xl"></i></li>
                    </div>

                    <img src="{{ asset('image/—Pngtree—young guy programmer freelancer working_5369036.png') }}"
                        class="img-fluid avator" alt="">

                </div>
            </div>
        </div>
    @endsection

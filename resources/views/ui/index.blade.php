@extends('ui.master-ui')

@section('title', 'Portfolio')



@section('intro')


    <div class="section">
        <div class="row">

            <img src="https://rb.gy/bipzcv" alt="" class=" backgroundcover">

            <div class="col-md-6 left-section">
                <img src="{{ asset("/storage/profile-img/$profileUser->image") }}" alt="Profile" class="profile">
            </div>

            <div class="col-md-6 right-section">

                <h3 class="mt-5 right-text" id="text"><i> </i></h3>
                <br>
                <h5 class="mt-4 right-text">Hey I'm <span class="color-text h2">PyaeSone</span>,
                    i'm Beginner Web Developer.</h5>
                <br>
                <h5 class="mt-3 right-text"><i><b class="color-text-2">
                            Welcome to my Personal Blog website
                        </b> </i>
                </h5>
                <h5><b class="text-info">To explore in detail -</b><br>
                    <h6>Email - psn@gmail.com <br>
                        Password - password</h6>
                </h5>
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
        <div class="col aboutme my-2">
            <h3>About Me</h3>
        </div>
    </div>
@endsection

@section('skill-section')
    <div class="container p-3 ">
        <div class="row my-2">

            <div class="col-md-6 skill-box">
                <div class="skill">
                    <h5 class="text-start text-light position-sticky top-0 btn btn-outline-info">Skills <span
                            class="badge bg-warning">{{ count($skills) }}</span> </h5>

                    @foreach ($skills as $skill)
                        <div class="row">
                            <div class="col-9 progress my-auto bg-transparent">
                                <div class="progress-bar  @if ($skill->percent <= '25') bg-danger
                                 @elseif($skill->percent <= '40') bg-warning text-secondary @elseif($skill->percent >= '50') bg-success @endif"
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

            <div class="col-md-5 mt-4 text-center mx-auto bordered">
                <div class="aboutmeparagraph">
                    <div class="text-light">
                        <h3>Info</h3>
                        <p class=" text-justify text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                            illum eligendi, dolores dolore
                            excepturi magni eum, totam animi, consectetur ut pariatur autem quibusdam assumenda vero. Quis
                            ratione sint voluptatum? Eligendi!
                        </p>
                    </div>
                    <a href="https://github.com/PyaesoneNyein96" target="_blank" class="nav-link h5">Here is my Github
                        address ...</a>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('project-content')
    <div class="project-title">
        <h5 class="project-title text-center my-5">
            My Project
        </h5>


        <div class="container mb-5">
            <div class="row  px-3 mx-auto">
                <div class="col-md-5 project-cover d-flex my-3 ">
                    @foreach ($projects as $project)
                        <a href="{{ $project->url }}" target="_blank"
                            class=" project-div text-decoration-none col-5 mx-auto">
                            <div class="card project py-4">
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
                    @endforeach
                </div>

                <div class="col-md-7 my-3">
                    <div class="project-text card text-start px-3">
                        <div class="text-light h4 text-center">
                            Service
                        </div>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quia cum
                            similique provident
                            eum.
                            Deleniti enim qui eaque optio facere maiores omnis voluptates laboriosam? Enim totam voluptatum
                            odio
                            voluptates iusto!
                        </p>
                    </div>
                </div>

            </div>

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
                                <div class="h5 text-light my-0">
                                    {{ $blog->title }}
                                </div>
                                <span class="text-white-50 small ">
                                    Date: {{ date('d-M-Y', strtotime($blog->created_at)) }} ,

                                    <span class="text-info small"> {{ strtok($blog->user->name, ' ') }} </span>

                                </span>
                            </div>

                            <div class="card-body pt-2 mx-0 px-1" style="height: 297px; overflow:hidden">
                                <img src="{{ asset("storage/blogs-img/$blog->image") }}" alt="imng"
                                    class="img-fluid mb-3" style="height: 200px; width:100%">
                                <div class="text-muted ">
                                    <h5 class="d-inline mt-2">
                                        {{ substr($blog->content, 0, 1) }}
                                        {{-- {{ strtok($blog->content, " ",) }} --}}
                                    </h5>
                                    {{ mb_substr($blog->content, 1) . "\n" }}

                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            @endforeach

            <div class="col-md-4 col-lg-3 mb-2 more-blogs border-light">
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
        <div class="row footer-row bg-warning">

            <div class="col-md-4">
                <ul class="list-footer">
                    <li><a href="">Contact</a></li>
                        <li><a href="">Phone -{{ $profileUser->phone }}</a></li>
                       <a href="{{$profileUser->email}}"> <li><a href="">
                        Email- {{ $profileUser->email }}</a></li></a>
                    <li><a href="">
                        Info</a></li>
                        <li><a href="">
                            About</a></li>
                </ul>
            </div>


            <div class="col-md-8 footer-7">
                <div class="footer-head mb-2">
                    Thank you for your time.
                </div>
                <div class="footer-text">
                    {{ $profileUser->content }}
                </div>
                <div class="d-flex footer-icon">
                    <a href="https://www.facebook.com/pyaesone.nyein.31/">
                        <li><i class="fab fa-facebook mx-2 fa-xl"></i></li>
                    </a>
                    <a href="https://www.instagram.com/pyae_sone.nyein/">
                        <li><i class="fab fa-instagram mx-2 fa-xl"></i></li>
                    </a>
                    <li><i class="fab fa-twitter mx-2 fa-xl text-primary"></i></li>
                    <li><i class="fa-solid fa-envelope fa-xl mx-2 text-primary"></i></i></li>
                    <li><i class="fab fa-github mx-2 fa-xl text-primary"></i></li>
                </div>

                <img src="{{ asset('image/—Pngtree—young guy programmer freelancer working_5369036.png') }}"
                    class="img-fluid avator" alt="">
            </div>

            <div class="copy-right small text-muted">
                ©2022 All rights reserved
                Privacy Policy
            </div>
        </div>
    </div>
@endsection

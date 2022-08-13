@extends('ui.master-ui')

@section('title', 'Blogs')

@section('blogs')

    <div class="row mx-0">
        <div class="col-lg-8 col-9 blog-left">

            @foreach ($Blogs as $blog)
                <div class="card my-2 articles ">
                    <div class="card-header">
                        <div class="badge bg-warning float-end mt-1">
                            {{ $loop->index + $Blogs->firstItem() }}
                        </div>
                        <h5>{{ $blog->title }}</h5>
                        <div class="card-subtitle">
                            <b>Date:</b> <small class="text-muted"> {{ date('d-m-Y', strtotime($blog->created_at)) }}
                            </small>
                            <b>, </b> <small class="text-muted"> {{ $blog->created_at->diffForHumans() }}</small> <br>
                            Category: <span class="text-success small">
                                {{ $blog->category->name }}
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset("storage/blogs-img/$blog->image") }}" class="mb-3 blog-img" alt="blog-img">
                        <p class="blog-paragraph">{{ $blog->content }}</p>
                        <div><a href="{{ url("blogs/detail/$blog->id") }}" class="text-decoration-none">Read more ...</a>
                        </div>

                    </div>

                </div>
            @endforeach
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    {{ $Blogs->links() }}
                </div>
            </div>
        </div>



        <div class="col-lg-4 col-3 blog-right">
            <div class="row">

                <form action="{{ url('/blogs/search') }}" method="get">
                    @csrf
                    <div class="input-group search mt-2">
                        <input type="text" class="form-control search-input" name="searchItem" placeholder="Search ..."
                            required>
                        <button class="btn btn-outline-light btn-search"><i class="fas fa-search"></i> </button>
                    </div>

                    <div class="input-group search-change mt-4">
                        <i class="fas fa-search fa-2xl btn-fake"></i>
                    </div>
                </form>

            </div>

            <div class="row mt-5">
                <div class="title-category text-light">Categories</div>
                @foreach ($categories as $category)
                    <div class="list-category">
                        <a href="{{ url("/blogs/searchByCategory/$category->id") }}"
                            class="category-link">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection


@section('footer')
    <div class="container-fluid mx-0 px-0 footer-container">
        <div class="row footer-row bg-warning">

            <div class="col-md-4">
                <ul class="list-footer">
                    <li><a href="">Info</a></li>
                    <li><a href="">Feedback</a></li>
                    <li><a href="">Phone - 09-795686096</a></li>
                    <li><a href="">
                        Email- Pyaesonenyein.1996@gmail.com</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </div>


            <div class="col-md-8 footer-7">
                <div class="footer-head mb-2">
                    Thank you for your time.
                </div>
                <div class="footer-text">
                    Lorem ipsum dolor, sit amet consectet
                    ur adipisicing elit. Impedit perspiciatis incidunt accusamus dolorum provident tenetur deserunt quisquam
                    dolor corp
                    oris nulla repellat illo id iusto molestiae pariatur sunt, asperiores assumenda cum.
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

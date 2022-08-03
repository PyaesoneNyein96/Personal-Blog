@extends('ui.master-ui')

@section('title', 'Blogs')

@section('intro')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/blogs.css') }}"> --}}



    <div class="row mx-0 mt-4 ">
        <div class="col-lg-8 col-9 blog-left">

            @foreach ($Blogs as $blog)
                <div class="card my-2 articles ">
                    <div class="card-header">
                        <div class="badge bg-warning float-end mt-1">
                            {{ $loop->index + $Blogs->firstItem() }}
                        </div>
                        <h5>{{ $blog->title }}</h5>
                        <div class="card-subtitle">
                            <b>Date:</b> <small class="text-muted"> {{ date('d-m-Y', strtotime($blog->created_at)) }} </small>
                            <b>, </b> <small class="text-muted"> {{ $blog->created_at->diffForHumans() }}</small> <br>
                               Category: <span class="text-success small">
                                {{$blog->category->name}}
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset("storage/blogs-img/$blog->image") }}" class="mb-3 blog-img" alt="blog-img">
                        <p class="blog-paragraph">{{ $blog->content }}</p>
                        <div><a href="{{ url("blogs/detail/$blog->id") }}" class="text-decoration-none">Read more ...</a>
                        </div>

                    </div>

                    {{-- <span>
                            {{$Likereact->count()}} Likes
                        </span><span>,</span>
                        <span>
                            {{$Dislikereact->count()}} dislike
                        </span>
                        <span>{{$blog->id}}</span> --}}

                    {{-- <form method="post">
                            @csrf
                            <button class="border border-transparent rounded-circle text-danger" formaction="{{ "/blogs/like/$blog->id" }}" type="submit" >
                                <i class=" fa-regular fa-heart value"></i>
                            </button>
                        </form> --}}
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

                <form action="{{url('/blogs/search')}}" method="get">
                    @csrf
                    <div class="input-group search mt-2">
                        <input type="text" class="form-control search-input" name="searchItem" placeholder="Search ..." required>
                        <button class="btn btn-outline-light btn-search"><i class="fas fa-search"></i> </button>
                    </div>

                    <div class="input-group search-change mt-4">
                        <i class="fas fa-search fa-2xl btn-fake"></i>
                    </div>
                    {{-- <div class="search-model">
                        <input type="text" class="form-control input-change" placeholder="Search ...">
                        <button class="btn btn-outline-light btn-change rounded-circle">

                        </button>
                    </div> --}}
                </form>

            </div>

            <div class="row mt-5">
                <div class="title-category text-light">Categories</div>
                @foreach ($categories as $category)
                    <div class="list-category">
                            <a href="{{url("/blogs/searchByCategory/$category->id")}}" class="category-link">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>



@endsection

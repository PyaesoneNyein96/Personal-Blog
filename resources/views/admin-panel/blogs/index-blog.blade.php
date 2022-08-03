@extends('admin-panel.master-dashboard')

@section('title', 'admin-blogs')

@section('content')

    <div class="container-fluid">

        @if(session('info'))
            <div class="alert alert-success alert-dismissable show fade">
                <button class="btn-close float-end" data-bs-dismiss="alert"></button>
               <b> {{session('info')}}</b>
            </div>
        @endif


        <div class="row mb-2">
            <div class="col-6 text-muted align-center">
                <div class="h5">Blogs/Contents</div>
            </div>
            <div class="col-6 my-auto">
                <a href="{{ route('blogs.create') }}" class="float-end btn btn-primary">
                    <i class="fas fa-plus-circle"></i> Add New Blog</a>
                </a>

            </div>
        </div>
        <div class="row">
            @foreach ( $blogs as $blog )


            <div class="col-md-6 mb-2">
                <div class="card-admin">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="">

                                <div>
                                    <div class="no badge bg-warning float-end mt-1">
                                        {{ $loop->index + $blogs->firstItem()}}
                                    </div>
                                    <h5>{{$blog->title}}</h5>
                                </div>
                                <div>Category <b> {{$blog->category->name}}</b></div>
                                @if ($blog->user)
                                <div>By: <b>{{$blog->user->name}}</b></div>
                                @else
                                By: Null
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="Blog-img">
                            {{-- {{$blog->image}} --}}
                            <img src="{{asset("storage/blogs-img/$blog->image")}}" alt="img" class="img">
                        </div>

                        <div class="blog-paragraph text-break" readonly>
                            {{$blog->content}}
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{route('blogs.destroy',$blog->id)}}" method="POST">
                            @csrf @method('delete')
                            <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success btn-sm">
                                Edit <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                                <button class="btn btn-danger btn-sm">
                                Delete <i class="fa-regular fa-trash-can"></i>
                            </button>
                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-secondary text-light btn-sm">
                                Comments  <i class="fas fa-comments"><span class="badge mx-1 bg-info rounded-pill">{{$blog->comments->count()}}</span></i></a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="links d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>

@endsection

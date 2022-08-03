@extends('ui.master-ui')

@section('title', 'Blogs-detail')

@section('intro')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">


                <div class="wrap">
                    <div class="header">
                        <h5 class="text-info"> {{ $detailBlog->title }}</h5>

                        <span class="text-light">
                            Date:
                        </span>

                        {{-- <small class="text-light"> {{ $detailBlog->created_at->diffForHumans() }}</small> --}}
                        <small class="text-light"> {{ date('d-M-Y', strtotime($detailBlog->created_at)) }},</small>
                        <small class="text-light"> {{ $detailBlog->created_at->diffForHumans() }}</small>


                        <div class="mb-2"> <span class="text-light">Category:</span> <span
                                class="text-primary">{{ $detailBlog->category->name }}</span> </div>

                    </div>

                    <div class="body mt-0">
                        <img src="{{ asset("storage/blogs-img/$detailBlog->image") }}"
                            class="mb-3 blog-detail-img img-fluid " alt="blog-img">

                        <p class="detail-paragraph text-light pb-3 text-break text-justify">{{ $detailBlog->content }}</p>
                    </div>


                    <div class="detail-footer">



                            <form method="post" action="{{ "/blogs/like/$detailBlog->id" }}">
                                @csrf
                                <button type="submit" class="bg-transparent rounded-circle text-info mb-2">
                                    @if(Auth::check())
                                    <i
                                    class=" fa-regular fa-heart value  @if ($likeStatus) @if ($likeStatus->type == 'like') fas fa-heart text-danger @endif
                                @endif">
                                </i>

                                    @endif

                                </button>


                                <span class="text-light">
                                    @if ($Likereact->count() < '2')
                                        {{ $Likereact->count() }} Like
                                    @else
                                        {{ $Likereact->count() }} Likes
                                    @endif
                                </span>

                            </form>







                        <div class="down-edge">
                            <span><a class="btn btn-info text-light mb-2" href="{{ '\blogs' }}" type="submit">Back
                                </a>
                            </span>

                            <div class="by text-white float-end">
                                @if (Gate::allows('normal-user', auth::user()))
                                    {{-- By: {{ auth::user()->name }} --}}
                                    By: {{ $detailBlog->user->name}}

                                @endif

                            </div>
                        </div>

                {{-- @if ({{$detailBlog->comments->status == 'show'}}) --}}


                  @auth
                  <ul class="list-group cmt-box d-block mb-3">
                    <li class="list-group-item active">Comments
                        <span class="badge bg-warning rounded-circle">
                            {{ $detailBlogCmt->count() }}
                        </span>
                    </li>
                    @foreach ($detailBlogCmt as $comment)

                        @if (Gate::allows('cmt-del', $comment))
                            <a href="{{ url("/blogs/commentDelete/$comment->id") }}"
                                class="btn btn-close float-end mt-3 mx-2"></a>
                        @endif


                        <li class="list-group-item my-1 rounded">{{ $comment->content }} <br>
                            By:<small class="text-info @if ($comment->user->status == 'admin') text-danger @endif">
                                {{ $comment->user->name }}
                            </small>
                                <span class="text-secondary small">
                                    {{ $comment->created_at->diffForHumans() }}
                                </span>
                        </li>
                    @endforeach

                </ul>
                  @endauth
                  {{-- @endif --}}


                        {{-- ----------- --}}


                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header " id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Your Comments &nbsp;&nbsp;&nbsp;

                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                                    <form action="{{ url('blogs/comment') }}" method="post" class="form-group bg-transparent">
                                        <div class="accordion-body px-0">
                                            @csrf
                                            <input type="hidden" value="{{ $detailBlog->id }} " name="blog_id">
                                            <textarea type="text" name="content" class="form-control" required placeholder="Write your Comment"></textarea>
                                            <button class="btn btn-primary cmt-sub" type="submit">Enter</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>




                        {{-- ----------- --}}



                    </div>
                </div>

            </div>


        </div>
    </div>
    </div>



@endsection

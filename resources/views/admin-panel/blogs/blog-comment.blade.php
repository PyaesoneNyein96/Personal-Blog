@extends('admin-panel.master-dashboard')


@section('title', 'blog-comment')

@section('content')
    <div class="container-fluid mx-0">

        <div class="header mb-2">
            <span class="badge bg-secondary pt-1 pb-2 ">Title : <span class="h6">{{ $commentBlogDetail->title }}
                </span></span>
            <span class="badge bg-primary py-2 mx-2">Comments ({{ $commentBlogDetail->comments->count() }})</span>
        </div>
        @if (session('info'))
            <div class="alert alert-success text-dark py-3 alert-dismissable show fade">
                <span class="btn btn-close float-end" data-bs-dismiss="alert"></span>
                {{ session('info') }}

            </div>
        @endif
        <table class="table table-striped table-hover table-bordered border-secondary ">

            <thead>
                <tr>
                    <th>No.</th>
                    <th>user</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th> <i class="fas fa-heart"></i> </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($commentBlogDetail->comments->count() < 1)

                    <td colspan="6">
                        <div class="text-info text-muted h5 text-center">No Comment !</div>
                    </td>
                @else
                    @foreach ($commentBlogDetail->comments as $cmtdetail)
                        <tr>
                            <th class="text-secondary text-center small">{{ $loop->index + 1 }}</th>

                            <th class="text-secondary ">{{ $cmtdetail->user->name }}</th>
                            <th class="text-secondary ">{{ $cmtdetail->user->status }}</th>
                            <th class="text-secondary text-muted w-75 ">{{ $cmtdetail->content }}</th>
                            <th class="text-secondary text-muted text-center small">
                                {{ $commentBlogDetail->reacts->count() }}</th>
                            <th class="small">
                                <form action="{{ url("blogs/status/$cmtdetail->id") }}"" method="post"
                                    style="min-width:80px">
                                    @csrf

                                    <button
                                        class="btn btn-sm
                                        {{ $cmtdetail->status == 'show' ? 'btn-secondary' : 'btn-success' }}">
                                        <i class="fas fa-eye-slash small"></i>
                                        {{ $cmtdetail->status == 'show' ? ' Hide' : 'Show' }}
                                    </button>

                                </form>

                            </th>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>

    </div>
@endsection

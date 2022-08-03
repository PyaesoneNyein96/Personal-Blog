@extends('admin-panel.master-dashboard')

@section('title', 'Projects');


@section('content')

    <div class="container-fluid mx-0 px-0 ">

        @if (session('info'))
            <div class="alert alert-success alert-dismissible show fade">
                <div> {{ session('info') }}</div>
                <button class="btn-close float-end" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row mb-3 mx-1 head">
            <div class="col-6 p-0">
                <div class="text-success h5 pt-auto">Projects</div>
            </div>
            <div class="col-6 p-0">
                <a type="submit" class="btn btn-primary float-end" href="{{ route('projects.create') }}">
                    <i class="fas fa-plus-circle text-warning h5 "></i> Add Projects</a>
                </a>
            </div>
        </div>

        <div class="row">

            @foreach ($projects as $project)
                <div class="col-sm-6 mb-2">
                    <div class="card project-card">

                        <div class="card-header">
                            <div class="title">
                                Project Name: <b class="text-dark h5 mx-3 p-2  rounded">
                                    {{ $project->name }}
                                </b>
                            </div>
                        </div>

                        {{-- <div class="card-body">
                            Project: <div class="project-img">
                                <h1>Null</h1>
                            </div>
                        </div> --}}
                        <div class="card-body">
                            <hr>
                            Address:&nbsp;&nbsp;{{ $project->url }}
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf @method('delete')
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success">
                                    Edit <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <button class="btn btn-danger" type="submit">
                                    Delete <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="row px-2 ">
                <div class=" d-flex my-4 justify-content-center mr-4"> {{ $projects->links() }}</div>
            </div>



        </div>
    </div>
@endsection

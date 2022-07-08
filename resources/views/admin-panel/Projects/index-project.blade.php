@extends('admin-panel.master')

@section('title', 'Projects');


@section('content')

    <div class="container">

        <div class="row mb-3">
            <div class="col-6 p-0">
                <h4 class="text-success">Projects</h4>
            </div>
            <div class="col-6 p-0">
                <a type="submit" class="btn btn-primary float-end" href="{{ route('projects.create') }}">
                    <i class="fas fa-plus-circle text-warning "></i> Add Projects</a>
                Add Projects
                </a>
            </div>
        </div>

        {{-- <div class="card-group"> --}}
        <div class="card">

            <div class="card-header">
                <div class="title">
                    Project Name:
                </div>
            </div>

            <div class="card-body">
                Project:

            </div>
            <div class="card-body">
                <hr>
                Address :
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-success">
                    Edit <i class="fa-regular fa-pen-to-square"></i>
                </a>
                <button class="btn btn-danger" type="submit">
                    Delete this Project <i class="fa-regular fa-trash-can"></i>
                </button>
            </div>

        </div>
        {{-- </div> --}}

    </div>
@endsection

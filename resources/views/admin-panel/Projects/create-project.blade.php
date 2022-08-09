@extends('admin-panel.master-dashboard')

@section('title', 'Create-Project')


@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="text-muted">
                        Add your Project
                    </h4>
                </div>
            </div>
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control my-1 @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Project Name ... ">
                        @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="url">Project Actress (url)</label>
                        <input type="text" class="form-control my-1 @error('url') is-invalid @enderror" name="url"
                            value="{{ old('url') }}" placeholder="Project URL ... ">
                        @error('url')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Add Project</button>
                </div>
            </form>

        </div>
    </div>

@endsection

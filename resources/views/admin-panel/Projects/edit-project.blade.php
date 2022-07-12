@extends('admin-panel.master')
@section('title', 'Edit-Project')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="h4 text-muted">Edit Your Project info</div>
                        </div>
                    </div>
                    <form action="{{ route('projects.update', $editProject->id) }}" method="post">
                        <div class="card-body">
                            @csrf @method('put')
                            <div class="mb-2 form-group">
                                <label for="name">Edit Project Name</label>
                                <input type="text" name="name" value="{{ $editProject->name ?? old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                            </div>

                            <div class="mb-2 form-group">
                                <label for="url">Edit Project Address</label>
                                <input type="text" name="url" value="{{ $editProject->url ?? old('url') }}"
                                    class="form-control  @error('url') is-invalid @enderror">
                                    @error('url')
                                        {{$message}}
                                    @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn-primary" type="submit">
                                Done
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

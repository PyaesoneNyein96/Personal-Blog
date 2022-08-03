@extends('admin-panel.master-dashboard')

@section('title', 'Create-Skills')

@section('content')

    <div class="container mt-2">


        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Skill Create Form</h4>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissable show fade">
                        <button class="btn-close float-end mt-2" data-bs-dismiss="alert"></button>
                        <ol>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ol>
                    </div>
                @endif
            </div>



            <form action="{{ url('admin/skills') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Add Skill Name">
                        @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="percent">Progress percent</label>
                        <input type="text" class="form-control @error('percent') is-invalid @enderror" name="percent"
                            value="{{ old('percent') }}" placeholder="Add Skill Percent">
                        @error('percent')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" style="width:80px" type="submit">
                        Add
                    </button>
                </div>
            </form>
        </div>


    </div>


@endsection

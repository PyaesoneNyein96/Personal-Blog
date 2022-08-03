@extends('admin-panel.master-dashboard')

@section('title','create-category')

@section('content')

<div class="container mt-2">


    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h4>Category Create Form</h4>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable show fade">
                    <button class="btn-close float-end mt-2" data-bs-dismiss="alert"></button>
                    <ol>
                        @foreach ($errors->all() as $err)
                            <li class="text-danger">{{ $err }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif
        </div>



        <form action="{{ route('Categories.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-3 form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="Add Category Name">
                    @error('name')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-primary" style="width:auto" type="submit">
                    Add Category
                </button>
            </div>
        </form>
    </div>


</div>




@endsection

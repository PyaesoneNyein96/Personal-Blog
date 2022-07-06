@extends('admin-panel.master')

@section('title', 'Edit-User')

@section('content')

    <h4>Edit User Data</h4>

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissable fade show">
            <button class="btn-close float-end " data-bs-dismiss="alert"></button>
            <ol>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ol>

        </div>
    @endif



    <form action="{{ url("admin/users/update/$editData->id") }}" method="POST">
        @csrf
        <div class="name mb-2  class="form-group"">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $editData->name }}"
            class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <small class="text-danger">
                    {{$message}}
                </small>
            @enderror
        </div>

        <div class="email mb-2  class="form-group"">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $editData->email }}"
            class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <small class="text-danger">
                    {{$message}}
                </small>
            @enderror
        </div>


        <div class="mb-2 class="form-group">
            <label for="status"></label>
            <select name="status" id="" class="form-select">
                <option value="admin" @if ($editData->status == 'admin') selected @endif>Admin</option>
                <option value="user" @if ($editData->status == 'user') selected @endif>User</option>
            </select>
        </div>


        <button class="btn btn-primary mt-3" type="submit">Update</button>
    </form>

@endsection

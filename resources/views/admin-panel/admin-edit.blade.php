@extends('admin-panel.master-dashboard');

@section('title', 'Admin-Edit')


@section('content')
    <div class="container-fluid">
        <div class="row">

            <form action="{{ url("admin/dashboard/update/$adminuser->id") }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card">

                    <div class="card-header">
                        <h5>Admin User Edit</h5>
                    </div>


                    <div class="card-body mx-2">

                        <div class="profile ">

                            <img src="{{ asset("storage/profile-img/$adminuser->image") }}" class="w-25 img-fluid mb-2"
                                alt="OldProfile">

                            <input type="file" value="{{ old('image') }}" name="image"
                                class="form-control w-50 @error('image') is-invalid @enderror">
                            @error('image')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror


                        </div>

                        <div class="mb-2">
                            <label for="name" class="form-label mt-2">Name</label>
                            <input type="text" class="form-control w-50" name="name" value="{{ $adminuser->name }}"
                                required>
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label mt-2">Email</label>
                            <input type="text" class="form-control w-50" name="email" value="{{ $adminuser->email }}"
                                required>
                        </div>

                        <div class="mb-2">
                            <label for="age" class="form-label mt-2">Age</label>
                            <input type="text" class="form-control w-25" name="age" value="{{ $adminuser->age }}">
                        </div>

                        <div class="mb-2">
                            <label for="phone" class="form-label mt-2">Phone</label>
                            <input type="text" class="form-control w-25 " name="phone" value="{{ $adminuser->phone }}">
                        </div>

                        <div class="mb-2">
                            <label for="biotext" class="form-label mt-2">Bio</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5"
                                placeholder="Content ....">{{ $adminuser->content }}</textarea>

                        </div>

                        <div class="mb-2">
                            <label for="socialurl" class="form-label mt-2">Social Media</label>
                            <input name="socialurl" class="form-control @error('socialurl') is-invalid @enderror" rows="5"
                                placeholder="social media URL ...." value="{{$adminuser->socialurl}}">

                        </div>

                        <div class="mb-2">
                            <label for="status" class="form-label mt-2">Status</label>
                            <select name="status" class="form-select">
                                <option value="admin" @if ($adminuser->ststus == 'admin') selected @endif>Admin</option>
                                <option value="user" @if ($adminuser->status == 'user') selected @endif>User</option>
                            </select>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

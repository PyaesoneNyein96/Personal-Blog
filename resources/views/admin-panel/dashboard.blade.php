@extends('admin-panel.master-dashboard')
@section('title', 'Admin-Dashboard')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-10 d-flex justify-content-between my-2 mx-auto">
                <span class="h5 m-2 text-muted text-blod mb-0">Admin Profile</span>
                <a class="btn btn-success text-light" href="{{url("admin/users")}}">
                    Promote Admin Member
                </a>
            </div>
            @foreach ($adminUser as $user)

            @if($user == Auth::user())
                <div class="col-md-10 mx-auto">
                    <div class="card mb-3 bg-transparent">
                        <div class="card-header">
                            <div class="admin-profile">
                                {{-- <img src="{{ url('https://rb.gy/egtmqs') }}" class="img-fluid w-50" alt="Recent profile"> --}}
                                {{-- <input type="file" name="image" class="form-control w-50 h-25 d-inline-block align-bottom"> --}}

                                    <img src="{{ asset("storage/profile-img/$user->image") }}" class=" w-50 mx-3 mx-50 h-50" alt="profile">


                                <div class="card-subtitle usrname my-3">
                                    <ul class="lilst-group d-flex px-0">

                                        <li class="list-group-item col-5">
                                            <label class="mb-2 text-muted">Name :</label>
                                             {{ $user->name }}
                                        </li>
                                        <li class="list-group-item col-7 mx-1">
                                            <label class="mb-2 text-muted">Status :</label>
                                            {{ $user->status }}
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="age mb-2">
                                <li class="list-group-item">
                                    <label class="mb-2 text-muted">Age :</label>
                                    {{$user->age}}
                                </li>
                            </div>
                            <div class="email mb-2">
                                <li class="list-group-item">
                                    <label class="mb-2 text-muted">Email :</label>
                                    {{ $user->email }}
                                </li>
                            </div>

                            <div class="phone mb-2">
                                <li class="list-group-item">
                                    <label class="mb-2 text-muted">Phone Number :</label>
                                    {{$user->phone}}
                                </li>
                            </div>
                            <div class="social-network-acc mb-2">
                                <li class="list-group-item">
                                    <label class="mb-2 text-muted">Social Media :</label>
                                 {{$user->sociclurl}}
                                </li>
                            </div>
                            <div class="bio">
                                <li class="list-group-item mb-2">
                                 <label class="h6 d-flex  justify-content-center text-muted">Bio</label>
                                 <p class="p-2 text-center">
                                    {{$user->content}}
                                </p>
                                </li>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="{{url("admin/dashboard/delete/$user->id")}}" method="Post" >
                                @csrf
                                <a href="{{url("admin/dashboard/edit/$user->id")}}" class="btn-sm btn btn-success">Edit</a>
                                <button class="btn btn-danger btn-sm" type="submit">
                                    delete
                                </button>
                                <a href="{{url("admin/dashboard/blogs/$user->id")}}" class="btn-sm btn btn-secondary px-3 mx-3">Blogs</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

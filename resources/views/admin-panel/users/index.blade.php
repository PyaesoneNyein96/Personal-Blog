@extends('admin-panel.master')

@section('title', 'Users-Management')

@section('content')






    <div class="container-fluid mx-0 px-0">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>User</h4>
                        </div>

                    </div>
                    <div class="card-body">

                        @if (session('info'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="text-danger">{{ session('info') }}</div>
                                <button class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered table-sm bg-dark">
                                <thead>
                                    <tr>
                                        <th scope="col" class="small">ID</th>
                                        <th scope="col" class="small">Name</th>
                                        <th scope="col" class="small">Email</th>
                                        <th scope="col" class="small">Status</th>
                                        <th scope="col" class="small">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userdata as $user)
                                        <tr>
                                            <th class="small">{{ $user->id }}</th>
                                            <th class="small">{{ $user->name }}</th>
                                            <th class="small">{{ $user->email }}</th>

                                            <th class="small">{{ $user->status }}</th>
                                            <th class="small">
                                                <form action="{{ url("admin/users/delete/$user->id") }}" method="post">
                                                    @csrf
                                                    <a href="{{ url("admin/users/edit/$user->id") }}"
                                                        class="btn btn-success btn-sm">Edit <i
                                                            class="fa-regular fa-pen-to-square"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are u sure u want to delete user [  {{ $user->name }}  ] ?')">
                                                        Delete <i class="fa-regular fa-trash-can"></i></button>
                                                </form>


                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>

                    <div class="card-footer">
                        {{ $userdata->links() }}
                    </div>
                </div>

                {{-- --------- --}}


            </div>
        </div>

    </div>

@endsection

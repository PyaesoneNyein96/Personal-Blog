@extends('admin-panel.master-dashboard')

@section('title', 'Users-Management')

@section('content')






    <div class="container-fluid mx-0 ">

        <div class="card-header">
            <div class="card-title">
                <h4>User</h4>
            </div>

        </div>


        @if (session('info'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="text-danger">{{ session('info') }}</div>
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover  table-bordered table-sm bg-dark">
                <thead>
                    <tr class="text-light text-center">
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userdata as $user)
                        <tr class="text-light text-center">

                            <th>{{ "$loop->index" + '1' }}</th>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->email }}</th>
                            <th>{{ $user->status }}</th>
                            <th>
                                <form action="{{ url("admin/users/delete/$user->id") }}" method="post">
                                    @csrf
                                    <a href="{{ url("admin/users/edit/$user->id") }}"
                                        class="btn btn-success small px-1">Edit <i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-danger small px-1"
                                        onclick="return confirm('Are u sure u want to delete user [  {{ $user->name }}  ] ?')">
                                        Delete <i class="fa-regular fa-trash-can"></i></button>
                                </form>


                            </th>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        <div class="card-footer d-flex justify-content-center">
            {{ $userdata->links() }}
        </div>

    </div>

@endsection

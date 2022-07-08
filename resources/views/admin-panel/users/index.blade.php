@extends('admin-panel.master')

@section('title', 'Users-Management')

@section('content')






    <div class="container">
        <div class="row">
            <div class="col">

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

                        <table class="table table-striped table-info table-bordered border-info table-hover">
                            <thead class="table-secondary table-bordered">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($userdata as $user)
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <th>{{ $user->name }}</th>
                                        <th>{{ $user->email }}</th>

                                        <th>{{ $user->status }}</th>
                                        <th>
                                            <form action="{{ url("admin/users/delete/$user->id") }}" method="post">
                                                @csrf
                                                <a href="{{ url("admin/users/edit/$user->id") }}"
                                                    class="btn btn-success btn-sm ">Edit <i
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
                    <div class="card-footer">
                        {{ $userdata->links() }}
                    </div>
                </div>

                {{-- --------- --}}


            </div>
        </div>
    </div>

@endsection

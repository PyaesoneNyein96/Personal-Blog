@extends('admin-panel.master')

@section('title', 'skill')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mt-2">Skill Page</h3>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary float-end" type="submit" href="{{ route('skills.create') }}">
                            <i class="fas fa-plus-circle"></i> Add New Skills</a>
                    </div>

                </div>
                @if (session('info'))
                    <div class="alert alert-info alert-dismissable show fade">
                        <button class="btn btn-close float-end" data-bs-dismiss="alert"></button>
                        <div><b>{{ session('info') }}</b></div>

                    </div>
                @endif
            </div>

            <div class="card-body">
                <table
                    class="table table-striped table-dark table-bordered border-info table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Percent</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skillData as $skills)
                            <tr>
                                <td>{{ $skills->id }}</td>
                                <td>{{ $skills->name }}</td>
                                <td>{{ $skills->percent }}</td>
                                <td class="">
                                    {{-- <form action="{{ url("admin/skills/$skills->id") }}" method="POST">
                                        @csrf @method('delete') --}}
                                    <a href="{{ url("admin/skills/$skills->id/edit") }}" class="btn btn-success btn-sm">
                                        Edit <i class="fa-regular fa-pen-to-square"></i></a>
                                    {{-- <a href="" type="submit" class="btn btn-danger btn-sm">
                                            </a> --}}

                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteskill">
                                        Delete <i class="fa-regular fa-trash-can"></i></button>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteskill" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <form action="{{ url("admin/skills/$skills->id") }}" method="post">
                                                @csrf @method('delete')

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary" type="submit">Delete Skill</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $skillData->links() }}
            </div>
        </div>





    </div>
@endsection

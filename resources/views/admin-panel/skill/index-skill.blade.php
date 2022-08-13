@extends('admin-panel.master-dashboard')

@section('title', 'skill')

@section('content')
    <div class="container-fluid mx-0 px-0">


        @if (session('info'))
            <div class="alert alert-success alert-dismissible show fade">
                <div> {{ session('info') }}</div>
                <button class="btn-close float-end" data-bs-dismiss="alert"></button>
            </div>
        @endif
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

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table table-striped table-dark table-bordered border-info table-hover text-center align-middle table-sm small">
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
                                    <td class="small">{{ $loop->index + $skillData->firstItem()}}</td>
                                    <td class="small">{{ $skills->name }}</td>
                                    <td>{{ $skills->percent }} %</td>
                                    <td class="">
                                        <form action="{{ url("admin/skills/$skills->id") }}" method="POST">
                                            @csrf @method('delete')
                                            <a href="{{ url("admin/skills/$skills->id/edit") }}"
                                                class="btn btn-success btn-sm">
                                                Edit <i class="fa-regular fa-pen-to-square"></i></a>


                                            <button class="btn btn-danger btn-sm" type="submit">
                                                Delete <i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{ $skillData->links() }}
            </div>
        </div>





    </div>
@endsection

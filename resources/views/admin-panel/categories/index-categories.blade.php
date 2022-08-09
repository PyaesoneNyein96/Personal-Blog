@extends('admin-panel.master-dashboard')

@section('title', 'categories')


@section('content')


    <div class="container-fluid mx-0 px-0">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mt-2">Categories</h3>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary float-end" type="submit" href="{{ route('Categories.create') }}">
                            <i class="fas fa-plus-circle"></i> Add New Category</a>
                    </div>

                </div>
                @if (session('info'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div> {{ session('info') }}</div>
                        <button class="btn-close float-end" data-bs-dismiss="alert"></button>
                    </div>
                @endif
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table table-striped table-dark table-bordered border-info table-hover text-center align-middle table-sm small">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="small">{{ $loop->index + $categories->firstItem() }}</td>
                                    <td class="small">{{ $category->name }}</td>
                                    <td class="">


                                        <form action="{{ route('Categories.destroy', $category->id) }}" method="post">
                                            @csrf @method('delete')
                                            <a href="{{ url("admin/Categories/$category->id/edit") }}"
                                                class="btn btn-success btn-sm">
                                                Edit <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{ $categories->links() }}
            </div>
        </div>





    </div>


@endsection

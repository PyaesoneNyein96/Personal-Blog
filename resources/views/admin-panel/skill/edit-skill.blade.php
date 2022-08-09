@extends('admin-panel.master-dashboard')

@section('title', 'Edit-Skill')

@section('content')

    <div class="container mt-2">


        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Edit Skill Form</h4>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissable show fade">
                    <button class="btn-close float-end mt-2" data-bs-dismiss="alert"></button>
                    <ol>
                        @foreach ($errors->all() as $err)
                            <span>{{ $err }}</span>
                        @endforeach
                    </ol>
                </div>
            @endif

            <form action="{{ url("admin/skills/$editskill->id") }}" method="POST">
                @csrf @method('patch')
                <div class="card-body">
                    <div class="mb-3 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $editskill->name ?? old('name') }}" placeholder="Add Skill Name">
                        @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="percent">Progress percent</label>
                        <input type="text" class="form-control @error('percent') is-invalid @enderror" name="percent"
                            value="{{ $editskill->percent ?? old('percent') }}" placeholder="Add Skill Percent">
                        @error('percent')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" style="width:140px" type="submit">
                        Update Skill
                    </button>
                </div>
            </form>
        </div>


    </div>


@endsection

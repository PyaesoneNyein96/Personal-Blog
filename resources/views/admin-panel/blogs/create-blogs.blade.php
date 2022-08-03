@extends('admin-panel.master-dashboard')

@section('title', 'Create-Blogs')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ url('admin/blogs') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="h5 card-title py-2 text-muted">Blogs/Content Create Form</div>
                        </div>
                        <div class="card-body">
                            <div class="from-group mb-2">
                                <label for="image">Image</label><br>
                                <input type="file" name="image" value="{{old('image')}}" class="form-control w-50 @error('image') is-invalid @enderror">
                                @error('image')
                                    <small class="text-danger">
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="title">Title</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                    placeholder="Enter blogs title ...">
                                @error('title')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5"
                                    placeholder="Content ....">{{ old('content') }}</textarea>
                                @error('content')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="Category_id">Category</label>
                                <select name="category_id"
                                    class="form-select text-muted @error('category_id') is-invalid @enderror"
                                    id="">
                                    <option value="">Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>

                        </div>
                        <input type="hidden" value="{{ Auth::user()->id}} " name="user_id">

                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>

@endsection

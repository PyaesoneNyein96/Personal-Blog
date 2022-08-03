@extends('admin-panel.master-dashboard')

@section('title','Edit-Blogs')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{route('blogs.update',$editBlog->id)}}" method="post" enctype="multipart/form-data">
                    @csrf @method('patch')
                    <div class="card-header">
                        <div class="h5 card-title py-2 text-muted">
                            Blogs/Content Update Form
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="from-group mb-2">

                            <img src="{{asset("storage/blogs-img/$editBlog->image")}}" alt="img" width="200"> <br>

                            <label for="image">Image</label><br>
                            <input type="file" value="{{old('image')}}" name="image" class="form-control w-50 @error('image') is-invalid @enderror">
                            @error('image')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="title">Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter blogs itle ..." value="{{ $editBlog->title ?? old('title') }}">
                            @error('title')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5"
                                placeholder="Content ....">{{$editBlog->content}}</textarea>
                            @error('content')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="Category_id">Category</label>
                            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror"
                            id="">
                                <option value="">Select Category ---</option>
                                {{-- <option value="#" class="selected">{{$editBlog->category->name}}</option> --}}
                                @foreach ($categories as $category )
                                    <option value="{{$category->id}}"
                                        {{-- @if ($editBlog->category->id == $category->id)
                                            selected
                                        @endif --}}
                                        {{ $editBlog->category->id == $category->id ? 'selected' : ''}}>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                    </div>
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

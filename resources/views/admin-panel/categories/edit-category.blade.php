@extends('admin-panel.master-dashboard')

@section('title', 'Edit-Category')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                   <div class="card-header">
                    <div class="card-title">
                        <div class="h5 text-muted">Edit Category</div>
                    </div>
                   </div>
                   <form action="{{route('Categories.update',$categoryEdit->id)}}" method="POST">
                    <div class="card-body">
                            @csrf @method('put')
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$categoryEdit->name ?? old('name')}}" class="form-control @error('name') is-invalid @enderror" >
                            @error('name')
                               <small class="text-danger">
                                {{$message}}
                               </small>
                            @enderror
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary my-2" type="submit">Done</button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>

@endsection

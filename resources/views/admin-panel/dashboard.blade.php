@extends('admin-panel.master-dashboard')
@section('title', 'Admin-Dashboard')


@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($adminUser as $user )
            <div class="col-md-6">
                <div class="card mb-3 bg-transparent">
                    <div class="card-header">
                        <div class="admin-profile">
                            <img src="{{ url('https://rb.gy/egtmqs') }}" class="img-fluid w-50" alt="">
                            <div class="card-subtitle usrname my-3">
                                {{$user->name}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="age">

                        </div>
                        <div class="email">

                        </div>

                        <div class="phone">

                        </div>
                        <div class="social-network-acc">

                        </div>
                        <div class="bio">

                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

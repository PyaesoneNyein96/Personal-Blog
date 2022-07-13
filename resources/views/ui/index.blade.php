@extends('ui.master-ui')

@section('feature-2')
    <div class="row">
        <div class="col aboutme my-5">
            <h3>About Me</h3>
        </div>
    </div>
@endsection

@section('skill-section')
    <div class="row my-2">

        <div class="col-md-7 skill-box">
            <div class="skill">
                <h5 class="text-start text-light position-sticky top-0 btn btn-outline-info">Skills <span
                        class="badge bg-warning">{{ count($skills) }}</span> </h5>
                @foreach ($skills as $skill)
                    <div class="row">
                        <div class="col-9 progress my-auto">
                            <div class="progress-bar @if ($skill->percent <= '30') bg-danger
                                 @elseif($skill->percent <= '70') bg-warning @elseif($skill->percent >= '70') bg-success @endif"
                                role="progressbar" style="width: {{ $skill->percent }}%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">{{ $skill->percent }}%</div>
                        </div>
                        <div class="col-3 my-2">
                            <div class="bg-secondary badge float-end my-auto">
                                {{ $skill->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="col-md-5 mt-4 text-center bordered">
            <div class="aboutmeparagraph">
                <i>
                    <h5 class="">
                        <a href="https://github.com/PyaesoneNyein96" target="_blank" class="nav-link ">Here is my Github
                            address ...</a>
                    </h5>
                </i>
                <a href="#" class="nav-link h5">Download my Resume</a>
            </div>
        </div>

    </div>
@endsection

@section('project-content')
    <div class="contact">
        <h5 class="text-warning text-center my-4">
            My Project
        </h5>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-6 col-md-4">
                    <a href="{{ $project->url }}" target="_blank" class="nav-link">
                        <div class="card py-4 mb-3">
                            <div class="card-title text-center">
                                {{ $project->name }}
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <i class="fa-solid fa-diagram-project fa-2xl"></i>
                            </div>
                        </div>
                        <div class="caption text-center">
                            {{ $project->name }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex my-4 justify-content-center mr-4 ">
                {{ $projects->links() }}
            </div>
        </div>
    @endsection


    @section('blog-content')
        <div class="container-fluid" id="blogs">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        <div class=" row footer bg-dark">
            <div class="col-4">Contact</div>
            <div class="col-4">Active</div>
            <div class="col-4">Social</div>
        </div>
    @endsection

@extends('ui.master-ui')

@section('content')
    <div class="row">
        <div class="col aboutme mt-3">
            <h3>About Me</h3>
        </div>
    </div>
@endsection

@section('section-2')
    <div class="row my-2">

        <div class="col-md-7 skill-box">
            <h5 class="text-start text-light">Skills</h5>
            @foreach ($skills as $skill)
            <div class="row">
                <div class="col-9 progress ">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$skill->percent}}%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">{{$skill->percent}}%</div>
                </div>
                <div class="col-3 my-2"><span class="bg-secondary badge">
                    {{$skill->name}}
                </span></div>
            </div>

            @endforeach

            {{-- ------------ --}}


        </div>

        <div class="col-md-5 mt-4">
            <div class="aboutmeparagraph">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt labore deleniti eum voluptate ullam
                    dolorem! Ipsam molestias enim autem, sequi aspernatur, corporis asperiores soluta ratione quaerat
                    voluptas, et quae architecto!
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt labore deleniti eum voluptate ullam
                    dolorem! Ipsam molestias enim autem, sequi aspernatur, corporis asperiores soluta ratione quaerat
                    voluptas, et quae architecto!
                </p>
            </div>
        </div>

    </div>
@endsection

@section('contact')
    <div class="contact">
        <h5>something</h5>
        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, hic voluptate totam quod
            illo commodi
            reprehenderit voluptas pariatur provident cum laborum. Accusamus voluptatem odit enim, illo suscipit fuga cumque
            et aperiam pariatur magnam quibusdam iure repellendus necessitatibus quae voluptates molestias a placeat
            ri officia? Error atque ipsa corrupti vero, illo soluta quam harum
            pariatur consequatur fugit asperiores adipisci animi maiores dicta sed commodi nobis debitis provident expedita
            voluptatibus nostrum. Quod, beatae cupiditate sequi fugit nesciunt alias recusandae quia veniam dolorem
            repudiandae. Fuga impedit a esse mollitia temporibus, reiciendis quaerat odio ullam delectus labore eius
            voluptatum laudantium sit corrupti. Laborum doloribus tempore accusantium ipsa earum voluptatem vel perspiciatis
            ratione. Nesciunt, ex consectetur? Animi voluptatum accusantium, assumenda sequi ad quis consequatur repellendus
            quasi.</p>
    </div>
@endsection

@section('footer')
    <div class=" row footer bg-dark">
        <div class="col-4">Contact</div>
        <div class="col-4">Active</div>
        <div class="col-4">Social</div>
    </div>
@endsection

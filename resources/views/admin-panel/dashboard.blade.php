{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Portfolio</title>
</head>

<body>

    <nav class="navbar navbar-expand-md px-2 text-light navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand h5 text-light my-auto" href="{{ url('/admin/dashboard') }}">
                Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav me-auto pr-2 ">
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Admin Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-light">Home</a>
                    </li>
                </ul>

                <ul class="navbar-nav auth ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }} <span
                                class="badge rounded-pill bg-warning">{{ Auth::user()->status }}</span>
                        </a>
                        <ul class="dropdown-menu w-25" aria-label="navbarDropdown"> --}}
{{-- <li><a class="dropdown-item " href="#">Log out</a></li> --}}
{{-- <form action="{{ url('/logout') }}" method="post"> --}}
{{-- href="{{ url('/logout')}}" URL ကိုလဲထည့်လို့ရ --}}
{{-- @csrf
                                <button class="dropdown-item logout" type="submit"
                                    onclick="return confirm('Are u sure')">
                                    Logout
                                </button>
                            </form>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3 ">
        <div class="row ">
            <div class="col-2 sidebar">
                <div class="list-group">
                    <li class="list-group-item">
                        <a href="#">
                            <i class="fa-solid fa-chart-line"></i>
                            <span class="d-none d-lg-inline">Active Log</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <i class="fa-solid fa-code"></i>
                            <span class="d-none d-lg-inline">skills</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <i class="fa-solid fa-diagram-project"></i>
                            <span class="d-none d-lg-inline">Project</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="d-none d-lg-inline">Contect</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="" class="">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="d-none d-lg-inline">About</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('admin/users') }}">
                            <i class="fa-solid fa-people-roof"></i>
                            <span class="d-none d-lg-inline">Users Manage</span>
                        </a>
                    </li>

                </div>
            </div>
            <div class="col-10 main ">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum veniam, explicabo facilis perferendis
                    ipsa
                    dolore dolor, ut blanditiis aliquam, mollitia commodi eveniet. Magnam cumque inventore, cum, numquam
                    perferendis nostrum sit maxime quae accusamus repellat perspiciatis labore architecto deserunt
                    officia
                    commodi! Natus, error est? Fuga dignissimos consectetur animi saepe quas recusandae, totam delectus
                    in
                    suscipit corrupti sapiente blanditiis voluptatibus voluptas cumque? Perferendis vel ducimus quisquam
                    dolorem quasi distinctio doloremque sequi doloribus enim? Omnis error distinctio id minus enim
                    perferendis a corporis unde quae accusamus beatae itaque quos sit, temporibus assumenda dolorem non.
                    A
                    eos laboriosam, non labore quas dolores ipsum doloremque et eum sit quasi fugit fugiat odio quo
                    ullam
                    similique accusamus dolorum sed? Quo nemo nobis dignissimos facilis odio eveniet eos recusandae
                    ratione
                    ex, quos molestias sunt labore, dolorem non molestiae ipsum aliquam modi officia rem obcaecati ipsa
                    quam
                    animi. Autem dicta, quod architecto sint nulla, delectus debitis odio fuga beatae veniam rerum
                    adipisci
                    cumque quis dolores nostrum eius suscipit et nihil hic veritatis, doloremque magnam repudiandae
                    accusamus? Voluptate repudiandae nesciunt, reprehenderit, veniam ullam sequi in vero eveniet velit
                    quae
                    amet. Aut aliquid beatae dolore voluptatem enim sunt modi iste minima deserunt recusandae? Quisquam
                    dignissimos exercitationem ex reiciendis quam, quibusdam possimus at cumque fuga eos? Repellat, hic
                    reprehenderit. Iusto ex assumenda culpa modi, cupiditate reprehenderit velit omnis sint eligendi
                    minus
                    vero enim facere veritatis doloremque deleniti corporis rem cum odio excepturi ea nisi voluptas ut
                    voluptatem! Non perferendis ab quos dolor numquam ipsam, commodi itaque praesentium laborum, eius
                    voluptatibus enim obcaecati voluptatum, quasi consequuntur. Exercitationem expedita, culpa sed
                    nesciunt
                    voluptates, est voluptatibus id aspernatur alias dolorum nulla laudantium! Unde accusamus minima
                    dicta
                    nisi assumenda, dolorem exercitationem quos autem suscipit vero quam, hic ipsam molestias esse
                    veniam
                    quasi dolore. Unde voluptatibus nulla ad asperiores consequuntur, aliquam error aspernatur cum? In
                    veritatis earum ex reiciendis asperiores ratione veniam at esse, labore perspiciatis doloremque
                    suscipit
                    deserunt optio commodi nostrum odio fugiat minima architecto porro neque deleniti rerum ut! Ratione
                    dolore nulla consequatur culpa consequuntur eos dolorum hic distinctio placeat, maxime, repellendus
                    doloribus ab modi est illo error eaque consectetur, aliquid animi nobis reiciendis. Non rem nisi
                    recusandae veritatis doloribus ex, ea quidem eos, eius laudantium, facere necessitatibus maiores sit
                    natus aut. Sint odit sit voluptas consequatur similique dolor possimus asperiores fugiat, molestiae
                    quia, eligendi fuga enim eaque doloribus voluptatum. Voluptates distinctio, minus atque laboriosam
                    tempore assumenda laudantium similique, temporibus, officiis nesciunt totam perferendis cum. Quam
                    quis
                    necessitatibus obcaecati, molestiae magnam neque a minus quos itaque consequuntur nemo aut delectus
                    voluptas quod alias quaerat maxime qui quibusdam doloremque cumque esse mollitia sapiente eos! Quam
                    eaque, cumque tempore, ab nostrum culpa commodi voluptate quod accusamus officia deleniti, tenetur
                    et
                    aut cum saepe! Et error temporibus eaque omnis dicta! Deleniti ullam fugit commodi debitis provident
                    voluptatem, repellendus temporibus suscipit. Delectus corporis natus dolorem nemo consequuntur ea
                    accusamus id vitae nesciunt dolores repellat animi omnis odio quisquam deleniti totam, minima
                    suscipit
                    voluptatibus voluptatum laborum. Est a tempora quidem veritatis sed libero tenetur nemo molestiae
                    sint
                    atque voluptates totam, sunt corrupti? Nostrum obcaecati laudantium illo facilis reiciendis ipsa
                    quidem
                    quisquam modi ab animi in, quasi, laborum hic recusandae aperiam. Maiores officia nihil repellat nam
                    consequatur laborum sapiente neque alias architecto quo provident exercitationem labore, cum
                    incidunt
                    dolorem totam distinctio, rem ratione odit quidem iure sunt. Dolore soluta assumenda tenetur
                    adipisci
                    possimus magnam expedita iusto aliquam libero! Placeat velit esse consequuntur pariatur vitae
                    accusamus,
                    modi exercitationem ea nemo saepe non, sapiente harum dolores at iusto deleniti totam hic possimus.
                    Similique repellat quam veritatis distinctio suscipit animi deserunt optio perferendis nam provident
                    nihil eos doloremque tempore iure, tenetur inventore dolorum quia ratione illo! Vel excepturi sint
                    quo,
                    quibusdam, consequatur aut explicabo iure tenetur adipisci aspernatur, vero dignissimos minima ex.
                    Ipsa
                    optio vel ad cupiditate odit aspernatur culpa adipisci quam eum impedit! Est blanditiis earum dolor
                    qui
                    aut explicabo, accusamus eveniet, fuga, magni esse maxime itaque repellat aliquam in molestias enim
                    omnis modi tenetur temporibus odio laboriosam voluptatibus voluptas. Nostrum, nesciunt error dolores
                    aperiam cumque necessitatibus unde voluptatem, molestias nam quos, voluptatibus aut fuga optio
                    accusamus
                    velit ducimus. Atque ex sequi nobis et aliquid deserunt necessitatibus nostrum consequatur, eius
                    assumenda voluptatum quas delectus sit commodi reprehenderit aliquam magnam maiores molestias.
                    Aperiam
                    non minima fugit cum, sunt eum obcaecati delectus corrupti consectetur repudiandae. Magni error
                    repudiandae sed id quas voluptatum minima inventore magnam odit provident? Optio excepturi
                    repudiandae
                    a, esse, modi iure, consequatur assumenda explicabo minima architecto ipsum expedita enim veniam
                    sapiente amet accusamus omnis iste quod. Exercitationem perferendis eum praesentium omnis! Adipisci
                    aperiam laudantium, pariatur tenetur eos nulla consequuntur voluptatum repudiandae maxime aliquid
                    eveniet ipsum iste enim voluptates minus qui nesciunt exercitationem provident nam quibusdam
                    perspiciatis omnis cum. Quaerat, illum reiciendis voluptatibus ducimus obcaecati quisquam ipsa aut
                    dignissimos quasi voluptates explicabo facilis temporibus eos accusantium quo quia officia, quae
                    adipisci est maxime ullam rem. Fugit eligendi quisquam et harum sed accusamus officiis atque
                    temporibus
                    iure laborum nostrum incidunt ipsam laboriosam id perferendis, ullam culpa eius porro magni, nam
                    repellat. Ullam nostrum neque sunt provident exercitationem nemo alias magni enim iure omnis! Veniam
                    officia repudiandae nam, libero necessitatibus aliquid mollitia cupiditate architecto ea, error ut
                    impedit excepturi voluptatum labore debitis sint inventore nostrum quisquam autem aut et cum? Atque
                    provident, totam odio quia pariatur veniam officia deleniti, omnis tempora excepturi minus, maiores
                    cum
                    perspiciatis eaque fugiat? Sunt tempora similique adipisci, aliquam quod rem vel, iste a nihil unde
                    quibusdam labore, excepturi harum quaerat! Ex accusantium ut quo laborum voluptas illo consequatur
                    unde
                    placeat amet similique dolorem eligendi pariatur facere in, iste repellendus corporis dolor vero
                    inventore commodi nemo asperiores animi impedit id. Soluta vitae quidem ipsa quibusdam libero
                    reprehenderit consectetur at deserunt quas quod excepturi nam similique accusamus distinctio sequi
                    eaque
                    doloribus, illum eum, inventore, est nihil. Inventore, molestiae quidem! Alias exercitationem ab est
                    modi asperiores quis consequatur veritatis ea? Praesentium incidunt deleniti nesciunt in dolorum,
                    reiciendis officiis optio doloremque saepe dolores iste iure facere provident aut libero sed aliquam
                    ex?
                    Dolores delectus quo error excepturi autem molestias laboriosam totam illo magnam.</p>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html> --}}

@extends('admin-panel.master')
@section('title','Admin-Dashboard')
@section('content')
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facilis cum impedit eligendi tempora, minus unde libero
        quaerat dicta nostrum vel sapiente aliquid commodi rem autem amet aperiam, deserunt voluptas quibusdam repellat,
        harum fugiat adipisci ad? Iure, itaque consectetur eos reiciendis, voluptatibus enim vitae minima exercitationem qui
        hic tempora molestiae laudantium vel ab facere id recusandae? Iure hic animi expedita illum, rem assumenda eligendi
        tempora pariatur quisquam ad consectetur saepe. Dolorum consectetur, iste cupiditate omnis veniam molestiae
        exercitationem sed animi! Recusandae, adipisci! Quisquam consequatur nostrum sequi quod vero laborum debitis porro
        hic a! Hic eius, inventore reiciendis dolores voluptatem velit quisquam. Quibusdam ullam sunt impedit temporibus,
        ipsum recusandae maiores doloribus placeat dolores earum assumenda excepturi magnam. Quae quis maxime autem
        consequatur. Sit praesentium sapiente tempore, id ratione nulla voluptatum labore modi nostrum suscipit blanditiis
        rerum deserunt accusamus ipsam molestiae neque consectetur ducimus eaque perferendis! Iste ducimus ad voluptas fuga
        nobis qui illo id repudiandae quaerat saepe natus dolorem dicta, porro dignissimos eaque voluptatibus! Iusto ipsam
        incidunt explicabo ipsum dicta laudantium inventore, molestiae vero omnis magni velit quaerat repellendus illum
        pariatur optio! Ea, facilis eos nihil amet impedit sequi sed omnis culpa pariatur odit adipisci itaque! Corporis,
        atque vel! Beatae, fugiat quaerat placeat odit soluta voluptatum eligendi veritatis unde magni impedit excepturi
        consequuntur ipsa provident praesentium, repellendus dicta iure error nostrum pariatur deserunt sit? Minus tempore
        nostrum accusantium inventore voluptates odit velit neque praesentium nobis reiciendis? Sit ab ratione deleniti
        animi eligendi magnam doloremque esse odio quia sed, excepturi corrupti illum distinctio totam dolore cum minima
        eaque amet laboriosam rem dolorem accusamus? Debitis voluptas vel quasi voluptatem sapiente tempore, omnis iste.
        Autem nostrum ad ipsam distinctio veniam deleniti aperiam. Laudantium odio, nisi error vel provident accusamus
        libero illum voluptate, eligendi iste quis minima repellat! Dolor autem minus officiis sequi nisi totam earum soluta
        et harum nemo sit inventore dolores, a velit molestias reprehenderit repellendus. Ipsum amet adipisci at, nihil ab
        harum labore laudantium aliquam ratione veritatis repellendus impedit ut nobis quo aut ducimus. Tempore laboriosam
        debitis esse omnis, officiis ea aliquid dignissimos ipsam quasi et maiores, reiciendis voluptas natus libero magni
        distinctio, facilis nihil velit? Dignissimos maiores perspiciatis facilis expedita facere molestias amet porro
        recusandae modi. Repellendus atque laboriosam veritatis quos velit minima assumenda veniam rem possimus eligendi,
        iusto labore porro. Nemo exercitationem incidunt ducimus in, atque optio recusandae voluptas totam cum repellat
        dolor nisi velit eius odit. Libero eos consectetur cupiditate, ad optio nihil expedita voluptatibus fugit
        temporibus. Sapiente nihil facilis eaque ipsam ea mollitia deserunt similique, delectus iure reprehenderit repellat
        natus. Hic iste deserunt porro! Necessitatibus dolor culpa eius in quis recusandae doloribus ad blanditiis, esse
        incidunt odit. Asperiores fugit est eius voluptatum minus quasi, quidem modi ipsum libero impedit esse obcaecati
        deserunt vitae, aperiam, cumque et. Corporis eaque neque ipsam perferendis autem mollitia nam enim quidem totam,
        officiis reiciendis, culpa quam fugit necessitatibus magnam atque deleniti recusandae voluptatibus nesciunt quas vel
        soluta! Ullam laboriosam temporibus officiis at. Recusandae pariatur sapiente fuga illo, vitae quia cum ea iusto
        alias unde libero molestiae perferendis fugit? Perspiciatis itaque minima soluta repudiandae molestias! Nemo
        eligendi deleniti tenetur repellendus deserunt dolor reiciendis provident explicabo nisi magnam voluptatem sed
        perferendis rerum necessitatibus fugiat, facere blanditiis sequi reprehenderit culpa? Mollitia illo quis neque
        eveniet temporibus molestiae suscipit debitis velit fuga quia, ullam dicta exercitationem fugiat inventore? Porro
        facere consectetur rem unde odit sunt dignissimos ex perspiciatis, mollitia vel voluptate, iure quae quas a sint
        cupiditate ut asperiores rerum voluptatem explicabo. Tempora alias cum sint ullam, perferendis natus voluptatem
        molestias? Vitae fugiat numquam maxime similique, rerum consectetur! Porro velit accusamus alias, voluptas error
        sunt excepturi quisquam iusto. Beatae autem, dolorum provident maxime voluptatem accusantium veritatis labore
        consequatur eius dignissimos quidem molestiae, ut sed in laborum. Mollitia, quas! Distinctio iste blanditiis ipsum
        voluptas maiores illum molestias deleniti at excepturi numquam? Aliquid in sunt cumque sapiente, accusantium ipsa
        obcaecati necessitatibus quo similique aspernatur dolores eveniet excepturi repellat recusandae neque quos commodi?
        Facilis in tempore ducimus, provident consequatur deleniti quod illum voluptates omnis nisi saepe maiores modi
        perferendis cum blanditiis atque dicta placeat temporibus veniam ipsum consectetur eaque quae reprehenderit.
        Distinctio expedita, eveniet dicta obcaecati voluptas deleniti at fugit saepe voluptatem quae soluta dolor nemo ad
        optio perspiciatis, rem ipsa voluptatibus itaque eaque veniam laborum nobis voluptates? Dolorem possimus sapiente
        incidunt consequuntur laboriosam est autem qui sequi dolores asperiores ipsam adipisci, repellendus, ab vitae
        accusamus totam expedita sunt tempora. Laudantium sit, quam accusamus quae dicta perspiciatis harum ut beatae
        pariatur similique a dolorum maxime placeat itaque, natus possimus adipisci nihil recusandae nemo explicabo alias.
        Laborum corporis nesciunt nemo dolorum odit perspiciatis aspernatur, eum a officiis alias, atque aliquam dolore
        rerum non, quia nam commodi numquam dicta quis. Quas architecto molestias quis facere delectus dolorum nulla iste
        molestiae quam, magnam libero cum eaque omnis optio perferendis explicabo consequatur sapiente provident, laborum
        ullam voluptatibus. Aliquam quos sapiente voluptatum molestiae harum distinctio repudiandae laboriosam similique
        quia, voluptates ad animi quaerat, dicta unde sed praesentium inventore vel. Commodi exercitationem iure esse
        voluptas distinctio aut ratione eius dolor voluptatem, quibusdam necessitatibus soluta, corporis quos debitis earum,
        ducimus ut dicta. Libero quasi nulla magni. Eveniet id asperiores a officiis suscipit nihil illo natus aut ea
        mollitia rerum repudiandae quis ratione voluptatum eum, inventore vero dolor fugiat odio amet in quisquam ullam
        distinctio. Iste, tenetur, vel sed blanditiis natus inventore optio fugit excepturi magnam omnis, praesentium
        dolorem quasi unde eveniet. Fugiat delectus id libero eum eius quidem excepturi iure saepe sequi rerum enim
        assumenda, culpa ad autem at eos voluptates quas omnis in cupiditate aliquam tempora accusantium voluptatem. Velit,
        nihil quae alias ab laudantium suscipit obcaecati repudiandae recusandae perspiciatis, adipisci qui quas rem
        explicabo harum ea quisquam tempora reprehenderit quis. Ducimus dignissimos tenetur harum culpa sint nulla id
        nostrum deleniti officia! Maxime molestiae, odio, illo laboriosam expedita dignissimos repellat neque, autem quod
        vero maiores nesciunt quo sit nemo doloribus similique soluta ab molestias aspernatur? Autem voluptatibus, atque
        odio ex ipsum numquam praesentium ea? Corrupti suscipit perspiciatis eligendi ullam, ex ipsum nulla temporibus,
        aliquid sequi, dolores repellat.</p>
@endsection

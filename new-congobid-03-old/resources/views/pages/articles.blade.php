@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-12">
                <h4 class="text-center title">Catégories</h4>
            </div>
            <div class="col-12">
                <div class="accordion accordion-lg" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#phone" aria-expanded="false"
                                aria-controls="collapseOne">
                                Téléphones / tablèttes
                            </button>
                        </h2>
                        <div id="phone" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#pc" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Ordinateurs / PCs
                            </button>
                        </h2>
                        <div id="pc" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#medias" aria-expanded="false"
                                aria-controls="collapseThree">
                                Multimédias
                            </button>
                        </h2>
                        <div id="medias" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#gold" aria-expanded="false"
                                aria-controls="collapseThree">
                                Bijoux / Montres
                            </button>
                        </h2>
                        <div id="gold" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#vetement" aria-expanded="false"
                                aria-controls="collapseThree">
                                Vetements / chaussures
                            </button>
                        </h2>
                        <div id="vetement" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#electro" aria-expanded="false"
                                aria-controls="collapseThree">
                                Electromenagers
                            </button>
                        </h2>
                        <div id="electro" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#car" aria-expanded="false"
                                aria-controls="collapseThree">
                                Véhicules
                            </button>
                        </h2>
                        <div id="car" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-collapse-lg" type="button"
                                data-bs-toggle="collapse" data-bs-target="#divers" aria-expanded="false"
                                aria-controls="collapseThree">
                                Divers
                            </button>
                        </h2>
                        <div id="divers" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Simba</span>
                                            <span>(1$ - 200$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Benda</span>
                                            <span>(201$ - 500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Turbo</span>
                                            <span>(501$ - 1500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Beton</span>
                                            <span>(1501$ - 2500$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Bulldozer</span>
                                            <span>(2501$ - 5000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sukisa</span>
                                            <span>(5001$ - 10000$)</span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#" data-bs-toggle="collapse" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
                                            aria-expanded="false" aria-controls="multiCollapseExample2">Items</a>
                                        <!-- <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                        </p> -->
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body">
                                                Some placeholder content for the second collapse component of this
                                                multi-collapse example. This panel is hidden by default but revealed
                                                when the user activates the relevant trigger.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Items</a>
                                    </li>
                                    <li>
                                        <a href="#">Items</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

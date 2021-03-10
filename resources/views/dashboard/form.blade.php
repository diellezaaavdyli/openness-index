@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header " id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                        <h2 class="mb-0 text-center">
                            <button class="btn collapsed activebtn" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Transparency
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            {{-- Subkategorita per Transparency --}}
                            <div class="accordion" id="accordionExample1">
                                <div class="card">
                                    <div class="card-header bg-light" id="headingOneOne" data-toggle="collapse"
                                        data-target="#collapseOneOne" aria-expanded="false" aria-controls="collapseOneOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseOneOne" aria-expanded="false"
                                                aria-controls="collapseOneOne">
                                                SubKategoria 11
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOneOne" class="collapse" aria-labelledby="headingOneOne"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 11
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light" id="headingOneTwo" data-toggle="collapse"
                                        data-target="#collapseOneTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseOneTwo" aria-expanded="false"
                                                aria-controls="collapseOneTwo">
                                                SubKategoria 12
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOneTwo" class="collapse" aria-labelledby="headingOneTwo"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 12
                                        </div>
                                    </div>
                                </div>
                              </div>
                              {{--  --}}
                        </div>
                    </div>
                </div>
                    <div class="card">
                        <div class="card-header active-btn btn-link" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
                            <h2 class="mb-0 text-center">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accessibility
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                {{-- Subkategorite per Accessibility --}}
                            <div class="accordion" id="accordionExample2">
                                <div class="card">
                                    <div class="card-header bg-light" id="headingTwoOne" data-toggle="collapse"
                                        data-target="#collapseTwoOne" aria-expanded="false" aria-controls="collapseTwoOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active" type="button"
                                                data-toggle="collapse" data-target="#collapseTwoOne" aria-expanded="false"
                                                aria-controls="collapseTwoOne">
                                                SubKategoria 21
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwoOne" class="collapse" aria-labelledby="headingTwoOne"
                                        data-parent="#accordionExample2">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 21
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light" id="headingTwoTwo" data-toggle="collapse"
                                        data-target="#collapseTwoTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwoTwo" aria-expanded="false"
                                                aria-controls="collapseTwoTwo">
                                                SubKategoria 22
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo"
                                        data-parent="#accordionExample2">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 22
                                        </div>
                                    </div>
                                </div>
                              </div>
                              {{--  --}}
                            </div>
                        </div>
                    </div>
                    {{-- Indikatori Integrity --}}
                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
                            <h2 class="mb-0 text-center">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Integrity
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                {{-- Subkategorite per Integrity --}}
                            <div class="accordion" id="accordionExample2">
                                <div class="card">
                                    <div class="card-header bg-light" id="headingThreeOne" data-toggle="collapse"
                                        data-target="#collapseThreeOne" aria-expanded="false" aria-controls="collapseThreeOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active" type="button"
                                                data-toggle="collapse" data-target="#collapseThreeOne" aria-expanded="false"
                                                aria-controls="collapseThreeOne">
                                                SubKategoria 31
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThreeOne" class="collapse" aria-labelledby="headingThreeOne"
                                        data-parent="#accordionExample2">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 31
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light" id="headingThreeTwo" data-toggle="collapse"
                                        data-target="#collapseThreeTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThreeTwo" aria-expanded="false"
                                                aria-controls="collapseThreeTwo">
                                                SubKategoria 32
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThreeTwo" class="collapse" aria-labelledby="headingThreeTwo"
                                        data-parent="#accordionExample2">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 32
                                        </div>
                                    </div>
                                </div>
                              </div>
                              {{--  --}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
                            <h2 class="mb-0 text-center">
                                <button class="btn collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Awareness
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                {{-- Subkategorite per Awareness --}}
                            <div class="accordion" id="accordionExample3">
                                <div class="card">
                                    <div class="card-header bg-light" id="headingFourOne" data-toggle="collapse"
                                        data-target="#collapseFourOne" aria-expanded="false" aria-controls="collapseFourOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active" type="button"
                                                data-toggle="collapse" data-target="#collapseFourOne" aria-expanded="false"
                                                aria-controls="collapseFourOne">
                                                SubKategoria 41
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFourOne" class="collapse" aria-labelledby="headingFourOne"
                                        data-parent="#accordionExample3">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 41
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-light" id="headingFourTwo" data-toggle="collapse"
                                        data-target="#collapseFourTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseFourTwo" aria-expanded="false"
                                                aria-controls="collapseFourTwo">
                                                SubKategoria 42
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFourTwo" class="collapse" aria-labelledby="headingFourTwo"
                                        data-parent="#accordionExample3">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 42
                                        </div>
                                    </div>
                                </div>
                              </div>
                              {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    @endsection


    @section('javascript')

        <script src="{{ asset('js/Chart.min.js') }}"></script>
        <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
    @endsection

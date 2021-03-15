@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header color-bg" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">
                        <h2 class="mb-0 text-center">
                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Транспарентност-Transparency
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                            {{-- Subkategoria per Transparency --}}
                            <div class="accordion" id="accordionExample1">

                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingOneOne" data-toggle="collapse"
                                        data-target="#collapseOneOne" aria-expanded="false" aria-controls="collapseOneOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseOneOne" aria-expanded="false"
                                                aria-controls="collapseOneOne">
                                                Заложба за транспарентност и отчетност-Commitment to transparency and accountability
                                            </button>
                                        </h2>
                                    </div>

                                    
                                    <div id="collapseOneOne" class="collapse" aria-labelledby="headingOneOne"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">

                                            {{-- Start Forma per pyetesorin e subkategorise 1 --}}
                                            {{-- Start of first question --}}
                                            <div class="scroll-class-questions">
                                            <form class="border form-padding">

                                                
                                                <p class="h5">1. Дали веб-страницата редовно се ажурира?-Is the website regularly updated?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Нема официјален сајт или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт, но нема ажурирање подолго од 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 15 дена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            {{-- End of first question --}}
                                            <br>
                                            {{-- Start of second question --}}
                                            <form class="border form-padding">

                                                <p class="h5">2. Дали информациите се еднакво објавени на сите службени јазици?-Is the information equally published in all official languages?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                0-Втората јазична верзија не е објавена или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                1-Има втора јазична верзија, но нема ажурирање подолго од 3м - 1-There is a second language version, but there is no update longer than 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                2-Има втора јазична верзија ажурирана во последните 3м - 2-There is a second language version updated in the last 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                3-Има втора јазична верзија ажурирана во последните 15 дена-3-There is a second language version updated in the last 15 days
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                НП
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            

                                            </div>
                                            {{-- End of second question --}}
                                            {{-- End of Forma per pyetesorin e subkategorise 1 --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Start of subkategoria2 --}}
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingOneTwo" data-toggle="collapse"
                                        data-target="#collapseOneTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseOneTwo" aria-expanded="false"
                                                aria-controls="collapseOneTwo">
                                                Организациски информации - Organizational information
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOneTwo" class="collapse" aria-labelledby="headingOneTwo"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">
                                            {{-- Start of first question te subkategorise 2 --}}
                                            <div class="scroll-class-questions">
                                            <form class="border form-padding">

                                                
                                                <p class="h5">1. Дали веб-страницата редовно се ажурира?-Is the website regularly updated?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Нема официјален сајт или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт, но нема ажурирање подолго од 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 15 дена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            {{-- End of first question te subkategorise 2 --}}
                                            <br>
                                            {{-- Start of second question te subkategorise 2--}}
                                            <form class="border form-padding">

                                                <p class="h5">2. Дали информациите се еднакво објавени на сите службени јазици?-Is the information equally published in all official languages?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                0-Втората јазична верзија не е објавена или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                1-Има втора јазична верзија, но нема ажурирање подолго од 3м - 1-There is a second language version, but there is no update longer than 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                2-Има втора јазична верзија ажурирана во последните 3м - 2-There is a second language version updated in the last 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                3-Има втора јазична верзија ажурирана во последните 15 дена-3-There is a second language version updated in the last 15 days
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                НП
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            

                                            </div>
                                            {{-- End of second question te subkategoris 2 --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End of subkategoria2 --}}

                            {{-- Start of subkategoria 3 --}}
                            {{-- Subkategoria per Transparency --}}
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingOneThree" data-toggle="collapse"
                                        data-target="#collapseOneThree" aria-expanded="false" aria-controls="collapseOneThree">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseOneThree" aria-expanded="false"
                                                aria-controls="collapseOneThree">
                                                Заложба за транспарентност и отчетност-Commitment to transparency and accountability
                                            </button>
                                        </h2>
                                    </div>
                                    
                                    <div id="collapseOneThree" class="collapse" aria-labelledby="headingOneThree"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">

                                            {{-- Start Forma per pyetesorin e subkategorise 3 --}}
                                            {{-- Start of first question --}}
                                            <div class="scroll-class-questions">
                                            <form class="border form-padding">

                                                <p class="h5">1. Даdasdasdasdasdasdsaли веб-страницата редовно се ажурира?-Is the website regularly updated?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Нема официјален сајт или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт, но нема ажурирање подолго од 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 3м
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Има официјален сајт ажуриран во последните 15 дена
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            {{-- End of first question --}}
                                            <br>
                                            {{-- Start of second question --}}
                                            <form class="border form-padding">

                                                <p class="h5">2. Дали информациите се еднакво објавени на сите службени јазици?-Is the information equally published in all official languages?</p>
                                                
                                                <hr>
                                                <fieldset class="row mb-3">

                                                    
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                0-Втората јазична верзија не е објавена или нема ажурирање подолго од 6 месеци
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                1-Има втора јазична верзија, но нема ажурирање подолго од 3м - 1-There is a second language version, but there is no update longer than 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios1" value="option1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                2-Има втора јазична верзија ажурирана во последните 3м - 2-There is a second language version updated in the last 3m
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                3-Има втора јазична верзија ажурирана во последните 15 дена-3-There is a second language version updated in the last 15 days
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                                id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                НП
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <hr>
                                                <div class="row mb-2">
                                                    <label for="inputText1" class="col-sm-10 col-form-label">Заснованост во македонска правна рамка или Стратегија - Legal or strategy requirement</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText1">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputText2" class="col-sm-10 col-form-label">Заснованост на меѓународни практики - Based on international practices</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputText2">
                                                    </div>
                                                </div>

                                                <legend class="h6">Извор - Source</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        веб-страница-website
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        прашалник-questionnaire
                                                    </label>
                                                </div><hr>
                                                <button type="button" class="btn btn-outline-info">Зачувај-Save</button>
                                            </form>
                                            

                                            </div>
                                            {{-- End of second question --}}
                                            {{-- End of Forma per pyetesorin e subkategorise 3 --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Start of subkategoria 4 --}}
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingOneFour" data-toggle="collapse"
                                        data-target="#collapseOneFour">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseOneFour" aria-expanded="false"
                                                aria-controls="collapseOneFour">
                                                SubKategoria 12
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOneFour" class="collapse" aria-labelledby="headingOneFour"
                                        data-parent="#accordionExample1">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 12
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            {{-- End of subkategoria 4 --}}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header btn-link color-bg" id="headingTwo" data-toggle="collapse"
                        data-target="#collapseTwo">
                        <h2 class="mb-0 text-center">
                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
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
                                    <div class="card-header subkategori-color" id="headingTwoOne" data-toggle="collapse"
                                        data-target="#collapseTwoOne" aria-expanded="false" aria-controls="collapseTwoOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active text-white" type="button"
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
                                    <div class="card-header subkategori-color" id="headingTwoTwo" data-toggle="collapse"
                                        data-target="#collapseTwoTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
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
                    <div class="card-header color-bg" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
                        <h2 class="mb-0 text-center">
                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Integrity
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            {{-- Subkategorite per Integrity --}}
                            <div class="accordion" id="accordionExample3">
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingThreeOne" data-toggle="collapse"
                                        data-target="#collapseThreeOne" aria-expanded="false"
                                        aria-controls="collapseThreeOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active text-white" type="button"
                                                data-toggle="collapse" data-target="#collapseThreeOne" aria-expanded="false"
                                                aria-controls="collapseThreeOne">
                                                SubKategoria 31
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThreeOne" class="collapse" aria-labelledby="headingThreeOne"
                                        data-parent="#accordionExample3">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 31
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingThreeTwo" data-toggle="collapse"
                                        data-target="#collapseThreeTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseThreeTwo" aria-expanded="false"
                                                aria-controls="collapseThreeTwo">
                                                SubKategoria 32
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThreeTwo" class="collapse" aria-labelledby="headingThreeTwo"
                                        data-parent="#accordionExample3">
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
                    <div class="card-header color-bg" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
                        <h2 class="mb-0 text-center">
                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Awareness
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            {{-- Subkategorite per Awareness --}}
                            <div class="accordion" id="accordionExample4">
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingFourOne" data-toggle="collapse"
                                        data-target="#collapseFourOne" aria-expanded="false"
                                        aria-controls="collapseFourOne">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed active text-white" type="button"
                                                data-toggle="collapse" data-target="#collapseFourOne" aria-expanded="false"
                                                aria-controls="collapseFourOne">
                                                SubKategoria 41
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFourOne" class="collapse" aria-labelledby="headingFourOne"
                                        data-parent="#accordionExample4">
                                        <div class="card-body">
                                            Ketu do te shfaqen Pyetjet e SubKategoria 41
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header subkategori-color" id="headingFourTwo" data-toggle="collapse"
                                        data-target="#collapseFourTwo">
                                        <h2 class="mb-0 text-center">
                                            <button class="btn collapsed text-white" type="button" data-toggle="collapse"
                                                data-target="#collapseFourTwo" aria-expanded="false"
                                                aria-controls="collapseFourTwo">
                                                SubKategoria 42
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFourTwo" class="collapse" aria-labelledby="headingFourTwo"
                                        data-parent="#accordionExample4">
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

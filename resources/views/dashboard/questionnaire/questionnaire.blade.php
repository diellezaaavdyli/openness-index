@extends('dashboard.base')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questionnires</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ url('create') }}" class="btn btn-dark">Create new questionnaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

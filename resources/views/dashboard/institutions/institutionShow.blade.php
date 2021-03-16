@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Institution: {{ $institution->title }}
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('logout') }}"> @csrf<button
                                    class="btn btn-primary">{{ __('Logout') }}</button></form>
                            <br>
                            <h4>Author:</h4>
                            <p> {{ $institution->user->name }}</p>
                            <h4>Title:</h4>
                            <p> {{ $institution->title }}</p>
                            <h4>Description:</h4>
                            <p>{{ $institution->content }}</p>
                            <h4>Date:</h4>
                            <p>{{ $institution->applies_to_date }}</p>
                            <h4> Status: </h4>
                            <p>
                                <span class="{{ $institution->status->class }}">
                                    {{ $institution->status->name }}
                                </span>
                            </p>
                            <h4>Institution type:</h4>
                            <p>{{ $institution->institution_type }}</p>
                            <a href="{{ route('institutions.index') }}"
                                class="btn btn-block btn-primary">{{ __('Return') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection

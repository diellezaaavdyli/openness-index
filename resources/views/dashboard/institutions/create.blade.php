@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> {{ __('Add new Institution') }}
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('institutions.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label>Title</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title"
                                        required autofocus>
                                </div>

                                <div class="form-group row">
                                    <label>Description</label>
                                    <textarea class="form-control" id="textarea-input" name="content" rows="9"
                                        placeholder="{{ __('Description') }}" required></textarea>
                                </div>

                                <div class="form-group row">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="applies_to_date" required />
                                </div>

                                <div class="form-group row">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id">
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label>Institution type</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Institution Type') }}"
                                        name="institution_type" required>
                                </div>

                                <button class="btn btn-block btn-success" type="submit">{{ __('Save and exit') }}</button>
                                <a href="{{ url('form') }}"
                                    class="btn btn-block btn-primary">{{ __('Fill the report') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection

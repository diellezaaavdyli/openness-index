@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('Institutions') }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <a href="{{ route('institutions.create') }}"
                                    class="btn btn-primary m-2">{{ __('Add new Institution') }}</a>
                            </div>
                            <br>
                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Institution type</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($institutions ?? '' as $institution)
                                        <tr>
                                            <td><strong>{{ $institution->user->name }}</strong></td>
                                            <td><strong>{{ $institution->title }}</strong></td>
                                            <td>{{ $institution->content }}</td>
                                            <td>{{ $institution->applies_to_date }}</td>
                                            <td>
                                                <span class="{{ $institution->status->class }}">
                                                    {{ $institution->status->name }}
                                                </span>
                                            </td>
                                            <td><strong>{{ $institution->institution_type }}</strong></td>
                                            <td>
                                                <a href="{{ url('/institutions/' . $institution->id) }}"
                                                    class="btn btn-block btn-primary">View</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('/institutions/' . $institution->id . '/edit') }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('institutions.destroy', $institution->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $institutions ?? ''->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection

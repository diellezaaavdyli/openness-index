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
                            <div id="paginationNumbers_wrapper" class="dataTables_wrapper dt-bootstrap4">

                            <table id="paginationNumbers" class="table table-responsive-sm table-striped dataTable home-table" width="100%" role="grid"
                            aria-describedby="paginationNumbers_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Author
                    : activate to sort column descending" style="width: 130px;">Author</th>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Title
                    : activate to sort column descending" style="width: 130px;">Title</th>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Description
                    : activate to sort column descending" style="width: 130px;">Description</th>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Date
                    : activate to sort column descending" style="width: 130px;">Date</th>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Status
                    : activate to sort column descending" style="width: 130px;">Status</th>
                                        <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Institution type
                    : activate to sort column descending" style="width: 130px;">Institution type</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($institutions ?? '' as $institution)
                                        <tr  role="row" class="odd home-tr">
                                            <td class="sorting_1"><strong>{{ $institution->user->name }}</strong></td>
                                            <td class="sorting_1"><strong>{{ $institution->title }}</strong></td>
                                            <td class="sorting_1">{{ $institution->content }}</td>
                                            <td class="sorting_1">{{ $institution->applies_to_date }}</td>
                                            <td class="sorting_1">
                                                <span class="{{ $institution->status->class }}">
                                                    {{ $institution->status->name }}
                                                </span>
                                            </td>
                                            <td class="sorting_1"><strong>{{ $institution->institution_type }}</strong></td>
                                            <td class="sorting_1">
                                                <a href="{{ url('/institutions/' . $institution->id) }}"
                                                    class="btn btn-block btn-primary">View</a>
                                            </td>
                                            <td class="sorting_1">
                                                <a href="{{ url('/institutions/' . $institution->id . '/edit') }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td class="sorting_1">
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


                            <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_numbers" id="paginationNumbers_paginate"></div>
                    </div>
                </div>

                            </div>
                            {{-- Per me i vendos 1,2,3,4,5 ne fund --}}
                            {{-- {{ $institutions ?? ''->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

<script type="text/javascript"
        src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/jquery.min.js">
    </script>
    <script type="text/javascript"
        src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/popper.min.js">
    </script>
    <script type="text/javascript"
        src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/mdb.min.js">
    </script>
    <script type="text/javascript"
        src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.2/compiled-addons.min.js">
    </script>
    <script type="text/javascript"
        src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-plugins-gathered.min.js">
    </script>

    <script type="text/javascript">
        {
            $(document).ready(function() {
                $('#paginationNumbers').DataTable({
                    "pagingType": "numbers"
                });
            });
        }

    </script>

@endsection

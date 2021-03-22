@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="h2"><strong>In-Progress Reports</strong></div><br>

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-height">
                        <div class="card-body">
                            <div class="text-value-lg">Kosovo Agency on Protection from Radiation and Nuclear Safety</div>

                            <div>Executive Agencies</div>
                            <br>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-height">
                        <div class="card-body">
                            <div class="text-value-lg">Office of the Chief State Prosecutor in Kosovo</div>
                            <br>
                            <div>Executive Agencies</div>

                            <br>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-height">
                        <div class="card-body">
                            <div class="text-value-lg">Court of Appeals</div>
                            <br><br><br><br>
                            <div>Courts</div>
                            <br>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100">15%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-height">
                        <div class="card-body">
                            <div class="text-value-lg">Kosovo Agency on Protection from Radiation and Nuclear Safety</div>

                            <div>Executive Agencies</div>
                            <br>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">Completed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="h2"><strong>Recently Opened</strong></div><br>
            <br>
            {{-- <button type="button" class="btn btn-secondary btn-lg btn-block">Basic Prosecution of Pristina</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Inter-Ministerial water council (ex - Water Task Force)</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Ministry of Agriculture, Forestry and Rural Development</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Municipalty of Ranillug</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Municipalty of Skenderaj</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Basic Prosecution of Pristina</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Minsitry of Local Government Administration</button> --}}







            <div id="paginationNumbers_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="paginationNumbers" class="table dataTable home-table" width="100%" role="grid"
                            aria-describedby="paginationNumbers_info" style="width: 100%;">

                            <thead>
                                <tr role="row" class="home-tr">
                                    <th class="th-sm sorting_asc" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-sort="ascending" aria-label="Name
                    : activate to sort column descending" style="width: 130px;">Name Of Ministry</th>
                                    <th class="th-sm sorting" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-label="Office
                    : activate to sort column ascending" style="width: 94px;">Office</th>
                                    <th class="th-sm sorting" tabindex="0" aria-controls="paginationNumbers" rowspan="1"
                                        colspan="1" aria-label="Start date
                    : activate to sort column ascending" style="width: 84px;">Changes</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Pristina</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2008/11/28</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Inter-Ministerial water council (ex - Water Task Force)</td>
                                    <td>Executive Agencies</td>
                                    <td>Last Updated 2009/10/09</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Ministry of Agriculture, Forestry and Rural Development</td>
                                    <td>Line Ministries</td>
                                    <td>Last Updated 2009/01/12</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Ranillug</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2012/10/13</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Municipalty of Skenderaj</td>
                                    <td>Executive Agencies</td>
                                    <td>Last Updated 2011/06/07</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Basic Prosecution of Pristina</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2012/12/02</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Ministry of Local Government Administration</td>
                                    <td>Line Ministries</td>
                                    <td>Last Updated 2011/12/12</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Basic Prosecution of Pristina</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2012/03/29</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Skenderaj</td>
                                    <td>Line Ministries</td>
                                    <td>Last Updated 2008/10/16</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Podujev</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2012/12/02</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Municipalty of Mitrovica</td>
                                    <td>Executive Agencies</td>
                                    <td>Last Updated 2011/12/12</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Ministry of Agriculture, Forestry and Rural Development</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2012/03/29</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Prizren</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2008/10/16</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Gilan</td>
                                    <td>Executive Agencies</td>
                                    <td>Last Updated 2012/12/02</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Municipalty of Ferizaj</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2011/12/12</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Peje</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2012/03/29</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Mitrovica</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2008/10/16</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Ministry of Agriculture, Forestry and Rural Development</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2012/03/29</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Prizren</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2008/10/16</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Gilan</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2012/12/02</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Municipalty of Ferizaj</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2011/12/12</td>
                                </tr>
                                <tr role="row" class="even home-tr">
                                    <td class="sorting_1">Municipalty of Peje</td>
                                    <td>Public Prosecution</td>
                                    <td>Last Updated 2012/03/29</td>
                                </tr>
                                <tr role="row" class="odd home-tr">
                                    <td class="sorting_1">Basic Prosecution of Mitrovica</td>
                                    <td>Local Self Governments</td>
                                    <td>Last Updated 2008/10/16</td>


                                    </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_numbers" id="paginationNumbers_paginate"></div>
                    </div>
                </div>
            </div>
            <div class="hiddendiv common"></div>
        </div>
    </div>
    </body>


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

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection

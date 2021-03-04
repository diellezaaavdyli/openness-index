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
                  <div class="progress-bar" role="progressbar" style="width: 25%;" 
                  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                </div>
                </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                  <div class="card card-height">
                  <div class="card-body">
                  <div class="text-value-lg">Office of the Chief State Prosecutor in Kosovo</div>
                  <br><br><br>
                  <div>Executive Agencies</div>
                  
                  <br>
                    <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" 
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
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
                      <div class="progress-bar" role="progressbar" style="width: 15%;" 
                      aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
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
                        <div class="progress-bar" role="progressbar" style="width: 100%;" 
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Completed</div>
                      </div>
                      </div>
                      </div>
                      </div>
              </div>


              <div class="h2"><strong>Recently Opened</strong></div><br>
              <br>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Basic Prosecution of Pristina</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Inter-Ministerial water council (ex - Water Task Force)</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Ministry of Agriculture, Forestry and Rural Development</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Municipalty of Ranillug</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Municipalty of Skenderaj</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Basic Prosecution of Pristina</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Minsitry of Local Government Administration</button>




            </div>
          </div>




@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection

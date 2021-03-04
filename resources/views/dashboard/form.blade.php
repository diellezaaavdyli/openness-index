@extends('dashboard.base')

@section('content')

<div class="container-fluid">
            <div class="fade-in">
              
              <!-- /.row-->
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"><strong>Report</strong> </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="select1">Institution</label>
                          <div class="col-md-9">
                            <select class="form-control" id="select1" name="select1">
                            <option value="1">Please select the institution!</option>
                              <option value="1">Kuvendi i Kosoves</option>
                              <option value="1">Presidenca e Republikës së Kosovës</option>
                              <option value="2">Ministria e Arsimit, Shkencës dhe Teknologjisë</option>
                              <option value="3">Ministria e Mjedisit dhe Planifikimit Hapësinor</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="select1">Indicator</label>
                          <div class="col-md-9">
                            <select class="form-control" id="select1" name="select1">
                              <option value="0">Transparency</option>
                              <option value="1">Accessibility</option>
                              <option value="2">Integrity</option>
                              <option value="3">Awareness</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="date-input">Date of research</label>
                          <div class="col-md-9">
                            <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block">Please enter a valid date</span>
                          </div>
                        </div>
                       
                       
                        
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Consistency and updating of the official website</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check">
                              <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                              <label class="form-check-label" for="radio1">There is no official website not updated more than 6 months </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                              <label class="form-check-label" for="radio2">There is official website but not updated more than 3 months</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                              <label class="form-check-label" for="radio3">There is official website updated in 3 months</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                              <label class="form-check-label" for="radio3">There is official website updated in 15 days</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Website Search Engine test:</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                              <label class="form-check-label" for="inline-radio1">There is no search engine</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                              <label class="form-check-label" for="inline-radio2">There is search engine, but not working</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                              <label class="form-check-label" for="inline-radio3">There is working search engine</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 col-form-label">Checkboxes</label>
                          <div class="col-md-9 col-form-label">
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check1" type="checkbox" value="">
                              <label class="form-check-label" for="check1">Option 1</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check2" type="checkbox" value="">
                              <label class="form-check-label" for="check2">Option 2</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" id="check3" type="checkbox" value="">
                              <label class="form-check-label" for="check3">Option 3</label>
                            </div>
                          </div>
                        </div>
                     
                       
                      </form>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                      <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
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

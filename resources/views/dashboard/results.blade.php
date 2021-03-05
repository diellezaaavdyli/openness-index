@extends('dashboard.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">

<div class="card text-center results-card">
  <div class="card-header results-card1">
    <strong>KOSOVO</strong>
  </div>
  <div class="card-body results-card2">
    <h5 class="card-title">Open data score of Kosovo is: 34.27 %</h5>
    <p class="card-text">Between 46 institutions monitored, 
      Ministry of Local Government Administration got the best score of 75.24 %, 
      while Municipality of Leposaviq got the worst score of 0.00 %</p>
  </div>
  <div class="card-footer text-muted results-card3">
    <strong>2021</strong>
  </div>
</div>
<br><hr><br>

    <div id="chartContainer" style="height: 370px; width: 75%; margin:auto;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </div>
</div>
<br>

@endsection

@section('javascript')

<script>
  window.onload = function () {
  
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light3", // "light1", "light2", "dark1", "dark2"
    title: {
      text: "Open data score by countries"
    },
    axisY: {
      title: "Score (in %)",
      suffix: "%"
    },
    axisX: {
      title: "Countries"
    },
    data: [{
      type: "column",
      yValueFormatString: "#,##0.0#\"%\"",
      dataPoints: [
        { label: "Albania", y: 59.1 },	
        { label: "Bosnia and Herzegovina", y: 54.70 },	
        { label: "Kosovo", y: 63.40 },
        { label: "North Macedonia", y: 49.50 },	
        { label: "Montenegro", y: 86.30 },
        { label: "Serbia", y: 57.80 }
        
      ]
    }]
  });
  chart.render();
  }
  </script>

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>

@endsection
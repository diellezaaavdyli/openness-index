@extends('dashboard.base')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Institution</th>
      <th scope="col">Author</th>
      <th scope="col">Others</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Consistency and updating of the official website</td>
      <td>Assembly of the Republic of Kosovo</td>
      <td>Admin</td>
      <td><button style="background-color:#08D42E; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">completed</button> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Is the organogram published on the website?</td>
      <td>Parliament</td>
      <td>Eva</td>
      <td><button style="background-color:#1218E4; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">ongoing</button> </td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td>Consistency and updating of the official website</td>
      <td>Ministry of Culture, Youth and Sport of Kosovo</td>
      <td>@fat</td>
      <td><button style="background-color:#08D42E; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">completed</button> </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Website Search Engine test:</td>
      <td>Ministry of Justice of Kosovo </td>
      <td>Rona</td>
      <td><button style="background-color:#08D42E; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">completed</button> </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Consistency and updating of the official website</td>
      <td>Thornton</td>
      <td>Elio</td>
      <td><button style="background-color:#1218E4; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">ongoing</button> </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Is the organogram published on the website?</td>
      <td>Ministry of Education, Science and Technology of Kosovo </td>
      <td>Rea</td>
      <td><button style="background-color:#08D42E; color:white; border-radius:15px; border:0px;font-size:10px; font-weight:bold;">completed</button> </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Website Search Engine test</td>
      <td>Office of the Prime Minister of Kosovo </td>
      <td>Admin</td>
      <td><button style="background-color:#08D42E; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">completed</button> </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Is the organogram published on the website?</td>
      <td>Ministry of Trade and Industry </td>
      <td>@fat</td>
      <td><button style="background-color:#1218E4; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">ongoing</button> </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Website Search Engine test</td>
      <td>Municipality of Pristina </td>
      <td>Elio</td>
      <td><button style="background-color:#1218E4; color:white; border-radius:7px; border:0px;font-size:10px; font-weight:bold;">ongoing</button> </td>
    </tr>
  </tbody>
</table>


@endsection

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection

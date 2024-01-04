<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DLMS</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="newdev/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="newdev/css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="newdev/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="newdev/css/tooplate.css">
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="{{url('dashboard')}}">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                            <h1 class="tm-site-title mb-0">DLMS</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('dashboard')}}">Dashboard
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Reports
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/newdevreport">Add New Report</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('client.list')}}">Clients</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('cont.list')}}">Contractors</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/newdevprofile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Profile
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/newdevprofile">Profile</a>
                                        <a class="dropdown-item" href="/editpassworddev">Edit Password</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="{{ route('logout') }}">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <div class="col-12">
                    <table class="u-table-entity">
                    <colgroup>
                      <col width="7.7%">
                      <col width="13.8%">
                      <col width="13.2%">
                      <col width="10.5%">
                      <col width="19.6%">
                      <col width="10%">
                      <col width="12.199999999999994%">
                      <col width="13.099999999999994%">
                    </colgroup>
                    <thead class="u-palette-4-base u-table-header u-table-header-1">
                      <tr style="height: 38px;">
                        <th>Report ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Area</th>
                        <th>Defect Lists</th>
                        <th>Status</th>
                        <th>Contractor in charge</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                      @foreach($data as $data)
                      <tr style="height: 75px;">
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->location}}</td>
                        <td>{{$data->area}}</td>
                        <td>{{$data->defect}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->contractor}}</td>
                        <td>
                            <a href="{{url('/newdevviewreport', $data->id)}}">View</a><br/>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script src="newdev/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="newdev/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="newdev/js/utils.js"></script>
    <script src="newdev/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="newdev/js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="newdev/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="newdev/js/tooplate-scripts.js"></script>
    
</body>
</html>

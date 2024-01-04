<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Report</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="/newdev/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/newdev/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="/newdev/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/newdev/css/tooplate.css">
</head>

<body class="bg02">
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
                                <a class="nav-link" href="{{url('dashboard')}}">Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/newdevreport">Add New Report</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('client.list')}}">Clients</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('cont.list')}}">Contactors</a>
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
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit Report</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="{{route('defect.update')}}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <div class="input-group mb-3">
                                    <label for="id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Report ID</label>
                                    <input id="id" name="id" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->id}}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Client Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->name}}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="addresses" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Address</label>
                                    <input id="address" name="address" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->address}}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="location" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Location</label>
                                    <input id="location" name="location" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->location}}" readonly>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="area" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Area</label>
                                    <input id="area" name="area" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->area}}" readonly>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="defect" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Defect List</label>
                                    <input id="defect" name="defect" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" value="{{$data->defect}}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="commenting" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Comments
                                    </label>
                                    <input id="comment" name="comment" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7" value="{{$data->comment}}" >
                                </div>

                                <div class="input-group mb-3">
                                    <label for="cont" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Contractor
                                    </label>
                                    
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="contractor" id="contractor">
                                        <option selected>{{$data->contractor}}</option>
                                        @foreach ($items as $key => $value)
                                        <option value="{{ $value }}" >{{ $value }}</option>
                                        @endforeach 
                                    </select>
                                    
                                </div>
                                <div class="input-group mb-3">
                                    <label for="stats" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Status
                                    </label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="status" id="status">
                                        <option selected>{{$data->status}}</option>
                                        <option value="Accepted">Accepted</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="On Hold">On Hold</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Cancelled">Cancelled</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/newdev/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/newdev/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="/newdev/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>

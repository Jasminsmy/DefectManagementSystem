<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Accounts</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="newdev/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="newdev/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="newdev/css/tooplate.css">
</head>

<body class="bg03">
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
        <!-- row -->
        <div class="row tm-content-row tm-mt-big">
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Client Account</h2>
                        </div>
                    </div>
                    <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                        @foreach($data as $data)
                           <li class="tm-list-group-item">
                               {{$data->name}}
                               <a href="{{route('client.edit', $data->id)}}">View</a>
                           </li>
                        @endforeach
                    </ol>
                </div>
            </div>  
        </div>
        <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Add new account</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('register.post') }}" method="POST" class="tm-signup-form">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" name="password" type="password" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input placeholder="etc. 0123456789" id="phone" name="phone" type="tel" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="useretype" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Usertype</label>
                                    <!--<input id="usertype" name="usertype" type="text" class="form-control validate" value="{{$data->usertype}}">-->
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="usertype" id="usertype">
                                        <option selected>Select one</option>
                                        <option value="0">Client</option>
                                        <option value="1">Developer</option>
                                        <option value="2">Contractor</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Add
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="newdev/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="newdev/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>

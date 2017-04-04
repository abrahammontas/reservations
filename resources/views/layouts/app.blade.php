<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Viva Wyndham Resorts</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('css')

    <style>
        body {
            font-family: 'Lato';
        }

        td, th {
            text-align:center;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Viva Wyndham Resorts
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (!Auth::guest())
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>
                @endif

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                    @else

                        <li class="dropdown">

                            <li><a href="{{ url('/reminder') }}">Reminders</a></li>

                        </li>
                        <!-- Dropdown for Create/List Reservations -->
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservation<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/reservation/create') }}"><i class="glyphicon glyphicon-pencil"></i>Add</a></li>
                                <li><a href="{{ url('/reservation') }}"><i class="glyphicon glyphicon-list-alt"></i> List</a></li>
                            </ul>
                        </li>

                        <!-- Dropdown for Reports Page -->
                        <li><a href="#">Reports</a></li>

                        @if ( Auth::user()->is('admin') )
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Admin menu <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li class="dropdown-header"><a href="{{ url('/reminders') }}"><i class="glyphicon glyphicon-home"></i> Hotels</a></li>
                                    <li><a href="{{ url('/hotel/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/hotel') }}"><i class=""></i> List</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header"><a href="#"><i class="glyphicon glyphicon-bed"></i> Rooms</a></li>
                                    <li><a href="{{ url('/rooms/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/room') }}"><i class=""></i> List</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header"><a href="#"><i class="glyphicon glyphicon-ok"></i> Occupancies</a></li>
                                    <li><a href="{{ url('/occupancy/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/occupancy') }}"><i class=""></i> List</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header"><a href="#"><i class="glyphicon glyphicon-tag"></i> Group Types</a></li>
                                    <li><a href="{{ url('/group_type/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/group_type') }}"><i class=""></i> List</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header"><a href="#"><i class="glyphicon glyphicon-flag"></i> Priorities</a></li>
                                    <li><a href="{{ url('/priority/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/priority') }}"><i class=""></i> List</a></li>


                                    <li role="separator" class="divider"></li>

                                    <li class="dropdown-header"><a href="#"><i class="glyphicon glyphicon-stats"></i> Status</a></li>
                                    <li><a href="{{ url('/status/create') }}"><i class=""></i>Add</a></li>
                                    <li><a href="{{ url('/status') }}"><i class=""></i> List</a></li>
                                </ul>

                            </li>
                        @endif

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('') }}"><i class="glyphicon glyphicon-cog"></i> Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


    @yield('scripts')

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    @yield('style')
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
                Laravel
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/search') }}">Search</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (isset($user))
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            {{--@if($unread_notifications_count != 0)--}}
                            @if($unread_notifications_count !=0)
                                <span class="label label-danger">{{ $unread_notifications_count }}</span>
                            @endif
                            {{--@endif--}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    @foreach($unread_notifications as $notification)
                                        <li><!-- Task item -->
                                            <a href="{{ url('user/notification/changeStatus/'.$notification->id) }}">
                                                <p>{{ $notification->notification->content }}</p>
                                            </a>
                                        </li><!-- end task item -->
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{ url('user/notification/all') }}">Show All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ $user->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/user/account') }}"><i class="fa fa-btn fa-sign-out"></i>My Account</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            <hr/>
                            <li><a href="{{ url('user/delete') }}"><i class="fa fa-btn fa-remove"></i>Delete</a></li>
                        </ul>
                    </li>
                @elseif(isset($marketer))
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            {{--@if($unread_notifications_count != 0)--}}
                            @if($unread_notifications_count !=0)
                                <span class="label label-danger">{{ $unread_notifications_count }}</span>
                            @endif
                            {{--@endif--}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    @foreach($unread_notifications as $notification)
                                        <li><!-- Task item -->
                                            <a href="{{ url('user/notification/changeStatus/'.$notification->id) }}">
                                                <p>{{ $notification->notification->content }}</p>
                                            </a>
                                        </li><!-- end task item -->
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{ url('user/notification/all') }}">Show All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ $marketer->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/marketer/account') }}"><i class="fa fa-btn fa-sign-out"></i>My Account</a></li>
                            <li><a href="{{ url('/marketer/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            <hr/>
                            <li><a href="{{ url('marketer/delete') }}"><i class="fa fa-btn fa-remove"></i>Delete</a></li>
                        </ul>
                    </li>
                @else

                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>

                @endif
                @if(!auth('marketer')->check())
                    <li><a href="{{ url('/marketer/register') }}">Register as Marketer</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<script src="{{ url('js/sweetalert.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
@yield('script')
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/21/2016
 * Time: 6:52 PM
 */
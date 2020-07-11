<!DOCTYPE html>
<html lang="en">
<head>
    <title>Letsgo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
      .active{
          text-decoration:underline;
          
      }
      
  </style>
</head>
<body>
       <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm h5">
        <div class="container ">
        <a class="navbar-brand" href="{{route('exploreEvents.index')}}">
                logo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    
                        <li class="nav-item {{(request()->segment(1) == 'exploreEvents') ? 'active' : '',ucfirst(request()->segment(1))}} ">
                            <a class="nav-link" href="{{route('exploreEvents.index')}}">Explore events</a>
                        </li>
                        <li class="nav-item {{(request()->segment(1) == 'yourEvent') ? 'active' : '',ucfirst(request()->segment(1))}}">
                        <a class="nav-link" href="{{route('yourEvent.index')}}">Your events</a>
                        </li>
                        {{-- Manage --}}
                        <li class="nav-item dropdown">  
                        <a id="navbarDropdown" class="nav-link dropdown-toggle {{request()->is('manage/*') ? 'active' : ''}}" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">Manage</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{(request()->segment(2) == 'event') ? 'active' : '',ucfirst(request()->segment(1))}}" href="{{route('event.index')}}">
                                    Events
                                </a>
                                <a class="dropdown-item {{(request()->segment(2) == 'category') ? 'active' : '',ucfirst(request()->segment(1))}}" href="{{route('category.index')}}">
                                    Categories
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle {{(request()->segment(2) == 'profile') ? 'active' : '',ucfirst(request()->segment(1))}}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">{{Auth::user()->firstname}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{(request()->segment(2) == 'profile') ? 'active' : '',ucfirst(request()->segment(1))}}" href="">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                </ul>
            </div>
        </div>
    </nav>
    @yield('body')
</body>
</html>
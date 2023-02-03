<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>cydt | admin </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="../assets/graindashboard/css/graindashboard.css">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            
            <!-- End Logo For Mobile View -->

            
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="gd-align-left"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <!-- User Notifications -->
                <div class="dropdown ml-auto" ></div>
                <!-- End User Notifications -->
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 gd-lock text-success"></span>
                        <!--REMOVE AUTH FOR ADMIN LOGIN -->
                        <span class="d-none d-md-block">{{ Auth::user()->name }}</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        
                        <li class="unfold-item unfold-item-has-divider">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                        <span class="unfold-item-icon mr-3">
                        <i class="gd-power-off"></i>
                        </span>
                                {{ __('Logout') }}
                            </a>

                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->

            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
     <!-- Sidebar Nav -->
     <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            

            <!-- Dashboard -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="home">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

    
            <!-- Users -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="editUser">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-user"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">User</span>
                </a>
            </li>
            <!-- End Users -->


            <!-- Settings -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="editActivity">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Activity</span>
                </a>
            </li>
            <!-- End Settings -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">
                <div class="card-body">
            
    <!-- Breadcrumb -->
   <nav class="d-none d-md-block" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">User</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->
      
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    <form action="{{ route('update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-xs-12 col-sm-12 col-md-6">
       
            <div class="form-group">
                <input type="text" name="name" value="{{ $user->name }}" class="border-light form-control" placeholder="Name">
            </div>
        
            <div class="form-group">
                <textarea class="border-light form-control" style="height:150px" name="email" placeholder="Detail">{{ $user->email }}</textarea>
            </div>
        
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/images/{{ $user->image }}" width="300px">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </div>
      
    </form>

                </div>
            </div>
        </div>
    </div>
</main>


<script src="assets/graindashboard/js/graindashboard.js"></script>
<script src="assets/graindashboard/js/graindashboard.vendor.js"></script>

</body>
</html>
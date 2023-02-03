<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>cydt | admin dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">


    <!-- Template -->
    <link rel="stylesheet" href="assets/graindashboard/css/graindashboard.css">

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
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="home">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

    
            <!-- Users -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="register">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-user"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">User</span>
                </a>
            </li>
            <!-- End Users -->


            <!-- Settings -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="create_project">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Project</span>
                </a>
            </li>
            <!-- End Settings -->

         

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">


            <div class="row">
                
            
             
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-success rounded-circle mr-3">
                            <i class="gd-bar-chart icon-text d-inline-block text-success"></i>
                        </div>
                        <div>
                            <h1 class="">{{$projects->count()}}</h1>
                            <h6 class="mb-0">Project Count</h6>
                        </div>
                        
                    </div>
                    <!-- End Widget -->
                </div>


            </div>


        

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">

                        <div class="card-body">
                            <!-- Breadcrumb -->
                            <nav class="d-none d-md-block" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Project</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">List</li>
                                </ol>
                            </nav>
                            <!-- End Breadcrumb -->

                            <!-- Users -->
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2"></th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                        <tr>
                                            <td class="py-3">{{ ++$i }}</td>
                                            
                                            <td class="py-3">{{ $project->name }}</td>
                                            <td class="py-3">
                                                <a href="project">
                                                    <span class="badge badge-pill badge-success">show</span>
                                                </a>
                                            </td>
                                            <td class="py-3">
                                                <form class="position-relative" action="{{ route('destroy',$project->id) }}" method="POST">
                                                    <a class="link-dark d-inline-block" href="{{ route('edit',$project->id) }}">
                                                        <i class="text-success gd-pencil icon-text"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border border-none link-dark d-inline-block" >
                                                        <i class="text-danger gd-trash icon-text"></i>
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!--{//!! $projects->links() !!} replace with data tables-->
                               

                            </div>
                            <!-- End Project -->


                          

                        </div>

                    </div>
                </div>
            </div>


        

           


           


        </div>

        
    </div>
</main>


<script src="assets/graindashboard/js/graindashboard.js"></script>
<script src="assets/graindashboard/js/graindashboard.vendor.js"></script>

<!-- DEMO CHARTS -->
<script src="assets/demo/resizeSensor.js"></script>
<script src="assets/demo/chartist.js"></script>
<script src="assets/demo/chartist-plugin-tooltip.js"></script>
<script src="assets/demo/gd.chartist-area.js"></script>
<script src="assets/demo/gd.chartist-bar.js"></script>
<script src="assets/demo/gd.chartist-donut.js"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>
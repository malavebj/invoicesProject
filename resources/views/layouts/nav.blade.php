<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Malave Projects</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>


        <!-- Bootstrap core CSS -->
        <link href={{ asset("css/bootstrap.min.css")}} rel="stylesheet">
        <link href={{ asset("css/bootstrap-reset.css")}} rel="stylesheet">

        <!--Animation css-->
        <link href={{ asset("css/animate.css")}} rel="stylesheet">

        <!--Icon-fonts css-->
        <link href={{ asset("assets/font-awesome/css/font-awesome.css")}} rel="stylesheet" />
        <link href={{ asset("assets/ionicon/css/ionicons.min.css")}} rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href={{ asset("css/style.css")}} rel="stylesheet">
        <link href={{ asset("css/helper.css")}} rel="stylesheet">
        <link href={{ asset("css/style-responsive.css")}} rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="{{ route('dashboard') }}" class="logo-expanded">
                    <img src={{asset("img/single-logo.png")}} alt="logo">
                    <span class="nav-label">Invoices</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    @can('ViewPurchases',auth()->user())
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="ion-home"></i> 
                                <span class="nav-label">Dashboard</span>
                            </a>
                        </li>
                    @endcan
                    @can('ViewProducts',auth()->user())
                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="ion-stats-bars"></i> 
                                <span class="nav-label">Products</span>
                            </a>
                        </li>
                    @endcan
                    @can('ViewInvoices',auth()->user())
                        <li>
                            <a href="{{ route('invoices.index') }}"><i class="ion-checkmark-round"></i> 
                                <span class="nav-label">Invoices</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>
                
                <!-- Left navbar -->
                <nav class=" navbar-default hidden-xs" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Files</a></li>
                        <li><a href="../frontend/" target="_blank">Frontend</a></li>
                    </ul>
                </nav>
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src={{asset("img/avatar-2.jpg")}} class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src={{asset("img/avatar-3.jpg")}} class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src={{asset("img/avatar-4.jpg")}} class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-sm up bg-pink count">3</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>
                            
                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src={{asset("img/avatar-2.jpg")}} class="img-circle profile-img thumb-sm">
                            <span class="username">{{auth()->user()->name}} </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="{{route('profile.edit')}}"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button action="submit" >
                                        <i class="fa fa-sign-out"></i> Log Out
                                    </button>
                                </form>    
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->
            @if (session()->has('flash'))
                <div class="alert alert-success">{{session('flash')}}</div>
            @endif
            @yield('content')

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2023 © InvoiceProject.
            </footer>
            <!-- Footer Ends -->
        </section>
        <!-- Main Content Ends -->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src={{asset("js/jquery.js")}}></script>
        <script src={{asset("js/bootstrap.min.js")}}></script>
        <script src={{asset("js/pace.min.js")}}></script>
        <script src={{asset("js/wow.min.js")}}></script>
        <script src={{asset("js/jquery.nicescroll.js")}}></script>
        <script src={{asset("js/jquery.app.js")}}></script>
        <script src={{asset("assets/datatables/jquery.dataTables.min.js")}}></script>
        <script src={{asset("assets/datatables/dataTables.bootstrap.js")}}></script>
        <script src={{asset("assets/timepicker/bootstrap-datepicker.js")}}></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );

            // Date Picker
            jQuery('#datepicker').datepicker();
        </script>
    
        @include('pages.products.create')
    </body>
</html>

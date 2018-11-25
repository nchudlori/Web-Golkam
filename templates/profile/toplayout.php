<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/golkam/assets/profile/plugins/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/golkam/assets/profile/eliteadmin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/golkam/assets/profile/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/golkam/assets/profile/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="/golkam/assets/profile/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="/golkam/assets/profile/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/golkam/assets/profile/eliteadmin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/golkam/assets/profile/eliteadmin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/golkam/assets/profile/eliteadmin/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- JS -->
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="/golkam/assets/profile/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/golkam/assets/profile/eliteadmin/bootstrap/dist/js/tether.min.js"></script>
        <script src="/golkam/assets/profile/eliteadmin/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/golkam/assets/profile/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="/golkam/assets/profile/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="/golkam/assets/profile/eliteadmin/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="/golkam/assets/profile/eliteadmin/js/waves.js"></script>
        <!--Counter js -->
        <script src="/golkam/assets/profile/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="/golkam/assets/profile/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
        <!--Morris JavaScript -->
        <script src="/golkam/assets/profile/plugins/bower_components/raphael/raphael-min.js"></script>
        <script src="/golkam/assets/profile/plugins/bower_components/morrisjs/morris.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/golkam/assets/profile/eliteadmin/js/custom.min.js"></script>
        <script src="/golkam/assets/profile/eliteadmin/js/dashboard1.js"></script>
        <!-- Sparkline chart JavaScript -->
        <script src="/golkam/assets/profile/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="/golkam/assets/profile/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
        <script src="/golkam/assets/profile/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
        <!--Style Switcher -->
        <script src="/golkam/assets/profile/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- JS END -->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <?php
    // error_reporting(E_ALL); ini_set('display_errors', '1');

        // DB Config
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "golkam";

        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Get user data
        $username = $_SESSION['login_user'];
        $user = "select * from users where username='$username'";
        $resUser = mysqli_query($con, $user);
        $dataUser = mysqli_fetch_array($resUser);
        $name = $dataUser['name'];
    ?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="/golkam/assets/profile/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="/golkam/assets/profile/plugins/images/eliteadmin-text.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs"><?php echo $name; ?></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="/golkam/profile/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"> <span class="hide-menu"> <?php echo $name; ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="/golkam/profile/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> 
                            <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                                <li><a href="form-tinymce-wysihtml5.html">Create Post</a></li>
                                <li><a href="/golkam/profile/blog/list.php">List post</a></li>
                        </ul>
                    </li>
                    <li>
                            <a href="data-table.html" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Lessons</span></a>
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <!-- <li><a href="#">Dashboard</a></li> -->
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
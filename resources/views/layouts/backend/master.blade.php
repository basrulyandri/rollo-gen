<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Empty Page</title>

    <link href="{{asset('assets/backend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('assets/backend')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets/backend')}}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{!!url('assets/backend')!!}/css/plugins/sweetalert/sweetalert.css">
    <link href="{{asset('assets/backend')}}/css/plugins/toastr/toastr.min.css" rel="stylesheet">


</head>

<body class="">

    <div id="wrapper">

    @include('layouts.backend.sidebar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            

            @yield('content')
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="{{asset('assets/backend')}}/js/jquery-2.1.1.js"></script>
    <script src="{{asset('assets/backend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('assets/backend')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{!!url('assets/backend')!!}/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('assets/backend')}}/js/inspinia.js"></script>
    <script src="{{asset('assets/backend')}}/js/plugins/pace/pace.min.js"></script>
    <script src="{{asset('assets/backend')}}/js/plugins/toastr/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
          swal({title: "Success",
                type: 'success',
                text: "{{Session::get('success')}} !",
                timer: 3000,
                showConfirmButton: true });
          @endif

          @if(Session::has('warning'))
            swal({title: "SURE ?",
                  type: 'warning',
                  text: "{{Session::get('success')}} !",
                  timer: 3000,
                  showConfirmButton: true });
          @endif
    </script>
    @yield('footer')

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('template/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('template/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('template/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('template/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gestor de Huellas</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-pencil-square-o"></i> Edicion Latente</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-check-square-o"></i> Verificacion</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-user"></i> Identificacion Latente</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Identificacion Latente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <i class="fa fa-hand-o-up"></i> Huella a comparar
                            <div>
                                <img src="{{asset('img/fp1.jpg')}}" class="img-responsive">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Sube nueva huella</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <i class="fa fa-hand-o-up"></i> Huella coincidente
                            <div>
                            <img src="{{asset('img/fp2.jpg')}}" class="img-responsive">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Estephanie Castellanos</span>
                                <span class="pull-right">95%</span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-search"></i> Coincidencias
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-female"></i> Estephanie Castellanos
                                    <span class="pull-right text-muted small"><em>91%</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-female"></i> Ilse Pulido
                                    <span class="pull-right text-muted small"><em>87%</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-female"></i> Samira Gutierrez
                                    <span class="pull-right text-muted small"><em>70%</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-male"></i>  Enrique Javier Perez
                                    <span class="pull-right text-muted small"><em>63%</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-female"></i> Samantha Lopez
                                    <span class="pull-right text-muted small"><em>50%</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-male"></i>  Samuel Hernandez
                                    <span class="pull-right text-muted small"><em>43%</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Invertir Orden</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('template/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('template/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('template/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>

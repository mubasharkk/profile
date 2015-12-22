<?php require_once 'inc/config.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mubashar Khokhar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo site_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/css/famfamfam_flags/famfamfam-flags.css">
    
    <link rel="shortcut icon" href="favicon.ico" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .content-wrapper {
          background : url('assets/img/boxed-bg.png');
        }
    </style>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php print site_url();?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>KK</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Mubashar</b> Khokhar</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo site_url();?>assets/img/profile/1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Mubashar Khokhar</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="pages/basic.php">
                <i class="fa fa-user"></i> <span><?php print t('Basic Information');?></span>
              </a>
            </li>
            <li class=" treeview">
                <a href="pages/skills.php">
                <i class="fa fa-wrench"></i> <span><?php print t('Technical Skills');?></span>
              </a>
            </li>
            <li class=" treeview">
                <a href="pages/professional.php">
                <i class="fa fa-briefcase"></i> <span><?php print t('Professional Experience');?></span>
              </a>
            </li>
<!--            <li class=" treeview">
                <a href="pages/projects.php">
                <i class="fa fa-space-shuttle"></i> <span><?php print t('Professional Projects');?></span>
              </a>
            </li>-->
            <li class="treeview">
                <a href="pages/education.php">
                <i class="fa fa-graduation-cap"></i> <span><?php print t('Educational Background');?></span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 id="page-title">
            <?php echo t('Basic Information');?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" id="page-content">
            <?php include_once './pages/basic.php';?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
          <strong>Copyright &copy; 2015-2016.</strong> Theme from : <a target="_blank" href="http://almsaeedstudio.com">Almsaeed Studio</a>. All rights reserved.
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo site_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="<?php echo site_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url();?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url();?>assets/js/app.min.js"></script>
    <script src="<?php echo site_url();?>assets/js/jquery.masonry.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo site_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo site_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo site_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo site_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo site_url();?>assets/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--    <script src="<?php echo site_url();?>assets/js/pages/dashboard2.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url();?>assets/js/demo.js"></script>
    
    <script src="<?php echo site_url();?>assets/js/autoload.js"></script>
    
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-39293268-3', 'auto');
            ga('send', 'pageview');

        </script>    
  </body>
</html>

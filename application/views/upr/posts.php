<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uprschool | Home</title>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/uprlogo.png';?>" />
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; height:100px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo '../../../images/uprlogo.png';?>" style="margin-top:-35px;" width="100" height="100"><font color="#5cb85c" size="6" style="font-family:Times; ">School</div></font></a>
            </div>
            <!-- /.navbar-header -->
            <div>
                                
                            <div class="input-group custom-search-form" style="width:670px; margin-left:300px;margin-top:30px;">
                                <input type="text" class="form-control" size="80px" placeholder="Search or Find Anything">
                                <span class="input-group-btn">
                                <button class="btn btn-default"  style="height:34px;" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>

                            </div>

        
</div>
<?php if ($this->session->userdata('login')){ ?>
<ul class="nav navbar-top-links navbar-right" style="margin-top:-38px; ">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Sadheer Ajk</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Saddam Azad</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>  <strong>  <?php echo $this->session->userdata('uname'); ?> </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url().'index.php/profile/index'?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?php echo $this->session->userdata('uname'); ?></strong></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

 <?php } else{ ?>
        
                <div class="buttons" style="margin-top:-33px;margin-left:1100px;">
                    <a href="<?php echo base_url().'index.php/signup/index'?>"><button type="button" class="btn btn-default">Sign Up</button></a>
                    <a href="<?php echo base_url().'index.php/login/index'?>"><button type="button" class="btn btn-info">Log in</button></a>     
                    <?php } ?>         
           </div>
      
    <div class="navbar-default sidebar" role="navigation" >
    <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="<?php echo base_url().'index.php/home/'?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> C++<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">C++  Programming Introduction</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Clases,Objests & Strings</a>
                                </li>
                                  <li>
                                    <a href="flot.html">C++ Control Statements</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Functions</a>
                                </li>
                                 <li>
                                    <a href="morris.html">C++ Arrays and Vectors</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Pointers</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Overloading Classes</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ OOP Inheritance</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ OOP Polymorphism</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Stream Input/Output</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++  Searching and Sorting</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ Exception Handling</a>
                                </li>
                                <li>
                                    <a href="morris.html">C++ File Processing</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Java<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Java Programing Introduction</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Java Applications Introduction</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Classes,Objects & Strings</a>
                                </li>
                                <li>
                                    <a href="flot.html">Java Functions/Methods</a>
                                </li>
                                <li>
                                    <a href="typography.html">Java Control Statements</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Arrays & ArrayList</a>
                                </li>
                                 <li>
                                    <a href="morris.html">Java OOP Inheritance</a>
                                </li>
                                <li>
                                    <a href="morris.html">Java OOP Polymorphism</a>
                                </li>
                                <li>
                                    <a href="grid.html">Java Exception Handling</a>
                                </li>
                                 <li>
                                    <a href="morris.html">GUI Components</a>
                                </li>
                                <li>
                                    <a href="morris.html">Graphics and Java 2D</a>
                                </li>
                                 <li>
                                    <a href="morris.html">Java Applets and Apps</a>
                                </li>
                                <li>
                                    <a href="morris.html">Multithreading</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> C#<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">C# Programming Introduction</a>
                                </li>
                                <li>
                                    <a href="buttons.html">C# Control Structures</a>
                                </li>
                                <li>
                                    <a href="notifications.html">C# Methods</a>
                                </li>
                                <li>
                                    <a href="typography.html">Arrays</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Object-Based Programming </a>
                                </li>
                                <li>
                                    <a href="grid.html">OOP: Inheritance </a>
                                </li>
                                 <li>
                                    <a href="grid.html">OOP: Polymorphism </a>
                                </li>
                                 <li>
                                    <a href="grid.html">Exception Handling </a>
                                </li>
                                 <li>
                                    <a href="grid.html">Graphical User Interface Concepts</a>
                                </li>
                                <li>
                                    <a href="grid.html">Multithreading </a>
                                </li>
                                <li>
                                    <a href="grid.html"> Graphics and Multimedia </a>
                                </li>
                               <li>
                                    <a href="grid.html">Files and Streams </a>
                                </li>
                                 <li>
                                    <a href="grid.html">Database, SQL and ADO .NET</a>
                                </li>
                                <li>
                                    <a href="grid.html">Networking: Streams-Based Sockets</a>
                                </li>
                                <li>
                                    <a href="grid.html">Data Structures and Collections</a>
                                </li>
                                                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                            <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> HTML<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">HTML Tables</a>
                                </li>
                                <li>
                                    <a href="buttons.html">HTML Forms</a>
                                </li>
                                <li>
                                    <a href="notifications.html">HTML Buttons</a>
                                </li>
                                <li>
                                    <a href="typography.html">HTML Textareas</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Other Components</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                          <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> JavaScript<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">HTML Tables</a>
                                </li>
                                <li>
                                    <a href="buttons.html">HTML Forms</a>
                                </li>
                                <li>
                                    <a href="notifications.html">HTML Buttons</a>
                                </li>
                                <li>
                                    <a href="typography.html">HTML Textareas</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Other Components</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                             <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> JQuery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">HTML Tables</a>
                                </li>
                                <li>
                                    <a href="buttons.html">HTML Forms</a>
                                </li>
                                <li>
                                    <a href="notifications.html">HTML Buttons</a>
                                </li>
                                <li>
                                    <a href="typography.html">HTML Textareas</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Other Components</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                 <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Ajax<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">HTML Tables</a>
                                </li>
                                <li>
                                    <a href="buttons.html">HTML Forms</a>
                                </li>
                                <li>
                                    <a href="notifications.html">HTML Buttons</a>
                                </li>
                                <li>
                                    <a href="typography.html">HTML Textareas</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Other Components</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> PHP<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">PHP Mysql</a>
                                </li>
                                <li>
                                    <a href="buttons.html">PHP Sessions</a>
                                </li>
                                <li>
                                    <a href="notifications.html">PHP Quries</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
               

            </div>
            <!-- /.row -->
            <?php

if(!isset($posts)){
?>
<p>There are currently no posts on my blog.</p>
<?php
}else
{
    foreach ($posts as $row) { ?>


            <div class="row">
                <div class="col-lg-8" >
                    <div class="panel panel-default" style="margin-top:10px;">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <?=$row['title']?>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Download</a>
                                        </li>
                                        <li><a href="#">Screen Resolution</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Related Videos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <iframe width="674" style="margin-top:-13px; margin-left:-12px;" height="360" src="https://www.youtube.com/embed/k92WCUX9A1Y" frameborder="0" allowfullscreen></iframe>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                         <div class="panel panel-default">
                              <div class="panel-heading" >
                            <i class="fa fa-bar-chart-o fa-fw" ></i> Description
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">View</a>
                                        </li>
                                        <li><a href="#">Download</a>
                                        </li>
                                        <li><a href="#">Execute</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Run</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            
                        <div class="panel-body">

                            <ul class="timeline" style="margin-top:-20px; font-size:16px;">    
                            <?=$row['des']?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                              <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Code
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">View</a>
                                        </li>
                                        <li><a href="#">Download</a>
                                        </li>
                                        <li><a href="#">Execute</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Run</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            
                        <div class="panel-body">

                            <ul class="timeline" style="margin-top:-20px; font-size:16px;">
                             <?=$row['code']?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                       <div class="buttons" style="margin-top:-10px; margin-left:7px;">
           <p>
                                <button type="button" class="btn btn-primary">Execute Code</button>
                                <button type="button" class="btn btn-default">Try Here</button>                     
                                                                
                            </p>
           </div>
                    <!-- /.panel -->
      


                         <div class="panel panel-default">
                              <div class="panel-heading" >
                            <i class="fa fa-bar-chart-o fa-fw" ></i> Comments Area
                         
                        </div>
                            
                        <div class="panel-body">
  
                            <ul class="timeline" style="margin-top:-20px; font-size:16px; width:450px; margin-left:100px;">
                    <div class="panel-body">
            
                        <form method="post" action="<?php echo (base_url().'index.php/Comments/add_comment'); ?>">
                            <fieldset>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="Firstname" name="firstname" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Lastname" name="lastname" type="text">
                                </div>
                                 <div class="form-group">
                                    <textarea class="form-control" placeholder="Type your comment" name="comment" type="text" ></textarea>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Comment</a>
                            </fieldset>
                        </form>

                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default" style="margin-top:10px;">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Related Videos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Related Video</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-default btn-block">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle"  style="height:20px;" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
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

</body>

</html>

<?php

    }
}?> 

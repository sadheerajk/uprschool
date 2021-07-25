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
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<body style="background-color: #e9e9e9;">

<div id="wrapper" style="background-color: #e9e9e9;">

<style type="text/css">
            
                .navbar{
   background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;

                }
                </style>
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #fff; height: 110px;" role="navigation" style=" height:100px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>" style="margin-top:-35px;" width="100" height="100"><font color="#5cb85c" size="6" style="font-family:Times; ">School</div></font></a>
            </div>
            <!-- /.navbar-header -->


            <div>
                                 <form method="post" action="<?php echo base_url().'index.php/search/index'?>">
                            <div class="input-group custom-search-form" style="width:670px; margin-left:300px;margin-top:30px;">

                                <input type="text" class="form-control" name="searchkey" size="80px" placeholder="Search or Find Anything">
                                <span class="input-group-btn">
                                <button class="btn btn-default"  style="height:34px;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>

                            </div>
</form>
        
</div>
    <?php 
     //if($this->session->userdata('userID')){  ?>
<?php if ($this->session->userdata('login')){ ?>
<ul class="nav navbar-top-links navbar-right" style="margin-top:-57px; ">
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
                                        <strong>Java</strong>
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
                                        <strong>PHP</strong>
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
                                        <strong>C#</strong>
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
                                        <strong>C++</strong>
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
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <?php echo $this->session->userdata('uname'); ?></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

 <?php } else{ ?>
        
                <div class="buttons" style="margin-top:-47px;margin-left:1100px;">
                    <a href="<?php echo base_url().'index.php/signup/index'?>"><button type="button" class="btn btn-default">Sign Up</button></a>
                    <a href="<?php echo base_url().'index.php/login/index'?>"><button type="button" class="btn btn-info">Log in</button></a>     
                    <?php } ?>         
           </div>
      </a>
      </div>
     
<style type="text/css">
            
                .navbar-default{
   background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)
        

                }
                </style>
    <div class="navbar-default sidebar"  style="margin-top:-20px;" role="navigation" >
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
   

<style type="text/css">
    .mycard{
 margin-top: -220px;
     background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    margin-left: 300px;
    margin-top: -20px;
    margin-right: 300px;
    width: 800px;
}
.mycard h2{
    
margin-left: 20px;
}
.row{
    margin-left: 80px;
}

</style>

<div class="mycard">
<hr/>
<h2>Loign Page</h2><hr/>

  <div class="row">
   
    <?php $attributes = array("name" => "loginform");
      echo form_open("login/index", $attributes);?>
   

<div class="col-md-4" style="width: 400px; margin-left: 100px;">
                        <label>E-Mail</label>
                        <input class="form-control" name="email" placeholder="Enter Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
        <span class="text-danger"><?php echo form_error('email'); ?></span>
                        <label>Password</label>
                       <input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
        <span class="text-danger"><?php echo form_error('password'); ?></span>
<br>
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-default">Login</button>
        <button name="cancel" type="reset" class="btn btn-info">Cancel</button>
      </div>
    <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>
     New User? <a href="<?php echo base_url(); ?>index.php/signup">Sign Up Here</a>
     <hr/>

    </div>
 
  
  </div>
</div>

                </div>


                                                        
</div>
</div>
</div>
                    <!-- /.panel -->
                 
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uprschool | Sign Up - Registering an account</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
</head>

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
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>" style="margin-top:-35px;"  height="100"></div></font></a>
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
    
            <!-- /.navbar-static-side -->
        </nav>
   

<style type="text/css">
    .card{
 margin-top: -220px;
     background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    margin-left: 160px;
    margin-top: -20px;
    margin-right: 300px;
    width: 900px;
}

</style>
                                <?php $attributes = array("name" => "signupform","enctype"=> "multipart/form-data");
      echo form_open("signup/index", $attributes);?>
<div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Registering an account</h3>
              <div class="card-footer"></div>
              <div class="card-body">
                <div class="form-horizontal" >
                
                  <div class="form-group">
                    <label class="control-label col-md-3">Firstname</label>
                    <div class="col-md-8">
                      <input type="text" name="fname" placeholder="Type your Firstname" value="<?php echo set_value('fname'); ?>" class="form-control" />
                      <span class="text-danger"><?php echo form_error('fname'); ?></span>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Lastname</label>
                    <div class="col-md-8">
                      <input type="text" name="lname" placeholder="Type your Lastname" value="<?php echo set_value('lname'); ?>" class="form-control" />
                      <span class="text-danger"><?php echo form_error('lname'); ?></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input type="email" name="email" placeholder="Enter email address" value="<?php echo set_value('email'); ?>" class="form-control col-md-8" />
                      <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Birthday</label>
                    <div class="col-md-8">
                      <input type="date" name="date" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('date'); ?></span>
                    </div>

                  </div>

                        <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-8">
                      <input type="password" name="password" placeholder="Password" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3">Repeat</label>
                    <div class="col-md-8">
                      <input type="password" name="cpassword" placeholder="Repeat Password" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                    </div>

                  </div>
                     <div class="form-group">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9">
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="sex" value="Male">Male
                        </label>
                      </div>
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="sex" value="Female">Female
                        </label>
                      </div>
                      <span class="text-danger"><?php echo form_error('sex'); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Identity Proof</label>
                    <div class="col-md-8">
                      <input type="file" class="form-control" name="image">
                     
                    </div>
                 
                 </div>
                  
                

                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="Agree To Terms & Policy" name="terms_and_policy">I accept the terms and conditions
                          <span class="text-danger"><?php echo form_error('terms_and_policy'); ?></span>
                        </label>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <div class="row" style="margin-left: 100px;">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a><br>
 <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?> 
                  </div>
                          
     
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

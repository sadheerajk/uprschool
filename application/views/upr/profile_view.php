<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uprschool | Profile - <?=$firstname?>  <?=$lastname?></title>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
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
               
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>"style="margin-top:-35px;"  height="100"></div></font></a>
            </div>
            <!-- /.navbar-header -->


            <div>
                                 <form method="post" action="<?php echo base_url().'index.php/search/find'?>">
                            <div class="input-group custom-search-form" style="width:670px; margin-left:300px;margin-top:30px;">

                                <input type="text" class="form-control" required="book_name" name="book_name" size="80px" placeholder="Search or Find Anything">
                                <span class="input-group-btn">
                                <button class="btn btn-default"  style="height:34px;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>

                            </div>
</form>
        
</div>

<?php if ($this->session->userdata('login')){ 

    ?>

<ul class="nav navbar-top-links navbar-right" style="margin-top:-57px; ">
             <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <strong><?=$firstname?>  <?=$lastname?>  </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url().'index.php/profile/index'?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>

                        <li><a href="<?php echo base_url().'index.php/accounts/lock' ?>"><i class="fa fa-lock fa-lg"></i> Lock</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?=$firstname?>  <?=$lastname?></a></strong>
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
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    

                }
                </style>

            <!-- /.navbar-static-side -->
        </nav>
</nav>
<?php if ($this->session->userdata('login')){ 

    ?>
     
<div class="card user-settings" style="width: 900; margin-left: 240px;margin-top: -20px;">
                  <h4 class="line-head">Account Details</h4>
                  <form method="post" action="<?php echo base_url()?>index.php/signup/update_account/<?=$id?>" enctype="multipart/form-data">
                    <div class="row mb-20">
                    <div class="col-md-4" >
                      <img style="margin-left: 10px;" class="img-circle user-image" width="140" src="<?=base_url()?>/profiles/<?=$photo?>" >
                      <label>Change Photo</label>
                        <input type="file" name="image" class="form-control" required="">
                        
                      </div>
                      </div>
                      <div class="row mb-20">
                      <div class="col-md-4">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" value="<?=$firstname?>">
                      </div>
                      <div class="col-md-4">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="<?=$lastname?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 mb-20">
                        <label>Email</label>
                        <input type="email"   disabled="" class="form-control" value="<?=$email?>">
                      </div>
                        <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Birthday</label>
                        <input type="date" name="date" value="<?=$date?>" class="form-control" val>
                      </div>
                       <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Password</label>
                        <input type="password" name="password" value="<?=($password)?>" class="form-control" >
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Sex</label>
                        <input type="sex" disabled="" value="<?=$sex?>" class="form-control" >
                        
                      </div>
                    
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Account Confirmed</label>
                        :<?=date('D d M Y g:i a',strtotime($sex))?>
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                      </div>
                    </div>
                  </form>
                </div>
                <?php } ?>
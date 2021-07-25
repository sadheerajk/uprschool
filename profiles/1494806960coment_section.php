<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$posts['title']?> | <?=$posts['cate']?> | Uprschool</title>

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
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>" style="margin-top:-35px;" width="100" height="100"><font color="#5cb85c" size="6" style="font-family:Times; ">School</div></font></a>
            </div>
            <!-- /.navbar-header -->


            <div>
                           <form method="post" action="<?php echo base_url().'index.php/search/find'?>">
                            <div class="input-group custom-search-form" style="width:670px; margin-left:300px;margin-top:30px;">

                                <input type="text" class="form-control" name="book_name" required="" size="80px" placeholder="Search or Find Anything">
                                <span class="input-group-btn">
                                <button class="btn btn-default"  style="height:34px;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>

                            </div>
</form>
        
</div>

<?php if ($this->session->userdata('login')){ ?>
<ul class="nav navbar-top-links navbar-right" style="margin-top:-57px; ">
   
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">  
                         <i ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <strong>   <?=$firstname?>  <?=$lastname?> </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url().'index.php/profile/index'?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li><a href="<?php echo base_url().'index.php/accounts/lock'?>"><i class="fa fa-lock fa-lg"></i> Lock</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?=$firstname?>  <?=$lastname?></strong></a>
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
          <style type="text/css">
            
                .navbar-default{
   background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    

                }
                </style>

    <div class="navbar-default sidebar" style="margin-top:-20px;" role="navigation" >
    <div class="sidebar-nav navbar-collapse" >

                    <ul class="nav" id="side-menu" >
                       
                        <li>
                            <a href=" <?php echo base_url().'index.php/home/'?>" ><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> C++<span class="fa arrow"></span></a>
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
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Feedback    </a>
                    
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Read Policy</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
</nav>
</div>

        <div id="page-wrapper"  style="background-color: #e9e9e9; margin-top: -30px;">
            
            

<style type="text/css">
    .panel h3{
        margin-left: 20px;
    }

</style>
                <div class="row" >
                <div class="col-lg-8" >
             <div class="pafsdkflnel" style="margin-top:10px;" >
                    <div class="panel panel-default" style="margin-left: 10px;margin-top:0px; margin-right: 20px;background-color: #fff;">
                          
                        <h3 style="margin-left:20px; "> <?=$posts['title']?><h3>
                        <hr/>
                             <iframe width="600" style="margin-top:-10px; " height="360" src="<?=$posts['video']?>" frameborder="0" allowfullscreen></iframe>
                           
                         <hr/>

                         <p class="socialsharing_product list-inline no-print" style="margin-left: 220px;">
                    
                 <i class="fa fa-twitter-square fa-fw"></i> 
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
           
                            
                <i class="fa fa-facebook-square fa-fw"></i> 
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
           
                          
                <i class="fa fa-google-plus-square fa-fw"></i>
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
            
                            
                <i class="fa fa-pinterest-square fa-fw"></i> 
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
                <i class="fa fa-github-square fa-fw"></i> 
            
            </p>

                        </div>
                     
                    
                        
                           <div class="panel panel-default" style="margin-top: -20px; margin-left: 10px;margin-right: 20px;background-color: #fff;">
                          
                        <h3>Description</h3>
                        <hr/>
                            <font color="black" style="margin-left: 10px;"><?=$posts['des']?></font>
                            <hr/>
                        </div>

                        
                           <div class="panel panel-default" style="margin-top: -20px;margin-left: 10px;margin-right: 20px;background-color: #fff;">
                              <h3>Code</h3>
                        <hr/>
                             <font color="black" style="margin-left: 10px;"><?=$posts['code']?></font>

                            <hr/>
                              <div class="buttons" style="margin-top:-10px; margin-left:7px;">
                            <p>
                                <button type="button" class="btn btn-primary">Execute Code</button>
                                <button type="button" class="btn btn-default">Try Here</button>                     
                                                                
                            </p>
                            </div>
                        </div>




                    </div>
                   
                 
         <style type="text/css">
          .panel-body{
  background: #fff; 
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;
   margin-top: -20px;

                }


                
                </style>


                         <div class="panel" style="background-color: #e9e9e9; margin-right: 20px;margin-left: 10px;">

                       <div class="panel-body">
    
                          <h3>Comments</h3>
                          <hr/>

<?php 
foreach ($comments as $m):?>
   
    <div id="Components">
<p><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$m['photo']?>" ><strong><font size="3"  color="black" style="margin-left: 10px;"> <?=$m['firstname']?> <?=$m['lastname']?></font></strong> <br/>
<font style="margin-left: 60px; font-size: 16px; "><?=$m['comment']?></font><br><font  style="font-size: 11px; margin-left: 60px;" color="gray"> <?=date('D d M Y g:i A',strtotime($m['date_added']))?></font></p>
<hr/>
</div>
                        
 <?php  endforeach;?>






           <?php if ($this->session->userdata('login')){ ?>

                
     <ul class="time" style="margin-top:10px; font-size:16px; width:350px; margin-left:100px;">
                    
                    <div class="cm">
            
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Comments/add_comment/<?=$posts['id']?>/<?=$posts['cate']?>/<?=$firstname?>/<?=$lastname?>/<?=$photo?>">
                            <fieldset>
                                     <textarea class="form-control" style="height:100px;margin-left: -120px;" placeholder="Type your comment" name="comment" type="text" required=""></textarea>
                                <br>
                              
                              
                                <button type="submit" style="width:130px; height:40px;margin-left: 200px; margin-top: -62px;" class="btn btn-default"><i class="fa fa-comments fa-fw"></i>Comment</a>
                                </div>
                            </fieldset>
                        </form>


<?php }else{ ?>



             

                            <ul class="time" style="margin-top:10px; font-size:16px; width:450px; margin-left:100px;">
                    <div class="cm">
                       
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Comments/add_comment/<?=$posts['id']?>/<?=$posts['cate']?>/">
                        
                            <fieldset>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="Firstname" name="firstname" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Lastname" name="lastname" type="text" required="">
                                </div>
                                 <div class="form-group">
                                    <textarea class="form-control" style="height:100px;" placeholder="Type your comment" required="" name="comment" type="text" ></textarea>
                                    <input type="hidden" name="image" value="user.ico">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" style="width:130px; height:40px;" class="btn btn-default"><i class="fa fa-comments fa-fw"></i>Comment</a>
                            </fieldset>
                        </form>
<?php   } ?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /.col-lg-8 -->
                <style type="text/css">
                   .panel-body a:hover{
                
                text-decoration: none;
            }
                .panel{
   background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;

                }
            

                </style>


                <div class="col-lg-4" style="background-color: #e9e9e9;" >
                    <div class="panel " style="margin-top:10px;  background-color: #fff;">
                       
                     <h3 style="margin-left:70px;">Related Videos</h3>
                      <hr/>
                        <div class="panel-body">
                           <?php foreach ($cate as $c):?>
    <iframe width="200" style="margin-left:50px;" height="100" src="<?=$posts['video']?>" frameborder="0" allowfullscreen></iframe>
                           <br><p  style="margin-left:50px; font-size:18px;"><a href=" <?php echo base_url()?>index.php/posts/readpost/<?=$c['id']?>/<?=$c['cate']?>"><?php echo $c['title']; ?></p></a>

                         
                       <?php endforeach; ?>
                       <hr/>
                            <a href="<?php echo base_url()?>/index.php/search/index" class="btn btn-default" style="width: 200px; margin-left: 45px;">See more videos</a>
                        </div>
                        <!-- /.panel-body -->
                    
                    </div>
                    
                    <!-- /.panel -->
                
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>


</body>

</html>


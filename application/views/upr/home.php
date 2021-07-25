<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="10;">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Uprschool | Homepage</title>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background-color: #e9e9e9; overflow-x: hidden;" >

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
               
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>" style="margin-top:-35px;"  height="100"></div></font></a>
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

   <style type="text/css">
            
                #page-wrapper{
                    height: 100%;
                    margin-top: -20px;
                    margin-left: 12px;
                    margin-right: 10px;

                    

   background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}
</style>

        <div id="page-wrapper">

<style type="text/css">
            
                .pa,table,tr,td{
   background: #fff;
   
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-top: 20px;

                }

 .pa a:hover{
                color:red;
                text-decoration: none;
                }

                </style>
 <hr/>
        <h2>Papular Posts</h2><hr/>
       
              <div class="pa">       
<?php if(!isset($posts)){
?>
<h2>There are currently no posts on my blog.</h2>
<?php
}else
{
    foreach ($posts as $row) { ?>

            
         <table style="float:left; margin-left:40px;" cellspacing="50">
         <tr colspan="2">             
         <td><iframe width="260" height="130" frameborder="0" allowfullscreen src="<?= $row['video'];?>?controls=0&showinfo=0" ></iframe></td></tr></a>
         
         <tr><td style="font-size:16px; text-align: center;"><strong><a href=" <?php echo base_url()?>index.php/posts/readpost/<?=$row['id']?>/<?=$row['cate']?>"><?= $row['title'];?></strong>  </td></tr>
</a></strong></td></tr>
        
         </table>
     


<?php
}    
?>

  </div></div>

 <style type="text/css">

                .col a:hover{
                color:red;
                text-decoration: none;

                }
                </style>
<div class="col" style="margin-left:600px;margin-top:-35px;font-size:20px;">
<p style="color:green;margin-right:190px; "><?=$pages; ?></p>
                </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</div>

</div>

</html>

    <!-- jQuery -->

</body>

</html>
<?php
 }
?> 

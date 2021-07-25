<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Expert | Home</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed" >
    <div class="wrapper" >
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="index.html" class="logo">Uprschool | Expert</a>
        <nav class="navbar navbar-static-top" ">
          <!-- Sidebar toggle button--></a>
          <!-- Navbar Right Menu--><?php if ($this->session->userdata('elogin')){ 

    ?>

          <div class="navbar-custom-menu" >
            <ul class="top-nav" >
              <!--Notification Menu-->
           
              <!-- User Menu-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"      <i ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <strong><?=$firstname?>  <?=$lastname?>  </strong>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  
                   <li><a href="<?php echo base_url().'index.php/experts/e_login'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?=$firstname?>  <?=$lastname?></a></strong>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
<?php }?>

      <div class="content-wrapper">
       
        <div class="row" style="margin-top: 60px;margin-left: -220px;width: 1700px;">
         
          <div class="col-md-9">
            <div class="card">
              <div class="table-responsive mailbox-messages">

 
<?php foreach ($cm as $row): ?>

                <table class="table table-hover">
                  <tbody>
                    <tr>
                      
                     
                      <td ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$row['photo']?>" > <b>  <?=$row['firstname'];?> <?=$row['lastname'];?></b></a></td>
                      <td class="mail-subject"><?=$row['comment'];?></td>
                      
                      <td><?=date('D d M Y g:i A',strtotime($row['date_added']))?></td>
                      <td><a href="<?=base_url()?>index.php/experts/editcomment/<?=$row['commentID']?>"><button type="button" class="btn btn-success">Publish</button></a> <a href="<?=base_url()?>index.php/experts/addcomment/<?=$row['postID']?>"><button  type="button" class="btn btn-primary">Reply</button></a><a href="<?=base_url()?>index.php/experts/deletecomment/<?=$row['commentID']?>"> <button type="button" style="background-color: red;" class="btn btn-normal"><font color="white">Delete</font></button></a></td>
                      <hr/>
                      

                    </tr>

                    <?php  endforeach;
                  ?>
                     
                  </tbody>
                </table>
               
              </div>
              
<script type="text/javascript">
$( document ).ready(function() {
$('.cm').hide();
});

function show(){
  $('.cm').show();
}
</script>

 





            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

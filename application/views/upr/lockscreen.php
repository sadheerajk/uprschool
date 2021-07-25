<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Uprschool | Lockscreen</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/uprlogo.png';?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Uprschool | Account Locked </h1>
      </div>
    
      <div class="lock-box"><img width="130" src="<?=base_url()?>/profiles/<?=$photo?>" class="img-circle user-image">
        <h4 class="text-center user-name"><?=$firstname?>  <?=$lastname?></h4>
        <p class="text-center text-muted">Account Locked</p>
        <form action="<?php echo base_url().'index.php/home/'?>" class="unlock-form">
          
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block">UNLOCK <i class="fa fa-unlock fa-lg"></i></button>
          </div>
        </form>
        <p><a href="<?php echo base_url().'index.php/login/'?>"">Not <?=$firstname?> ? Login Here.</a></p>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>
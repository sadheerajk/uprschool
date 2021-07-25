<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
 
    <meta http-equiv="refresh" content="2;url=ok"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Redirecting | <?=$firstname?> <?=$lastname?></title>

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
</head>

<body style="background-color: #e9e9e9;">

<style type="text/css">
  .card{

    height: 200px;
    margin-top: 200px;
    margin-right: 300px;
    margin-left: 300px;
  }
</style>
    
<div class="card">
<img src="<?php echo base_url().'/images/uprlogo.png';?>" height="40">
              <div class="overlay">

                <div class="m-loader mr-20">
                  <svg class="m-circular" viewBox="25 25  50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"></circle>
                  </svg>
                </div>
                <h3 class="l-text"> Connecting  - <i ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <?=$firstname?> <?=$lastname?></h3>
              </div> 
         
            </div>
          
</body>
</html>
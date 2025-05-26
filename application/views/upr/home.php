<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Uprschool | Homepage</title>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom-home.css';?>">
<link rel="stylesheet" type="text/css" id="dark-mode-css" href="<?php echo base_url().'assets/css/dark-mode.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/typography.css';?>">
</head>

<body class="custom-home-body">

<div id="wrapper" class="custom-home-wrapper">

        <nav class="navbar navbar-default navbar-static-top home-navbar custom-navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo home-navbar-brand-logo"><img src="<?php echo base_url().'/images/uprlogo.png';?>" class="home-navbar-brand-logo-img"  height="100"></div></a>
            </div>
            <!-- /.navbar-header -->

            <div>
                <form method="post" action="<?php echo base_url().'index.php/search/find'?>">
                    <div class="input-group custom-search-form home-search-form-container">
                        <input type="text" class="form-control" required="book_name" name="book_name" size="80px" placeholder="Search or Find Anything">
                        <span class="input-group-btn">
                            <button class="btn btn-default home-search-form-button" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>

            <?php if ($this->session->userdata('login')){ ?>
            <ul class="nav navbar-top-links navbar-right home-navbar-top-links">
                <li><button id="darkModeToggle" class="btn btn-outline-secondary" style="margin-top: 8px; margin-right: 15px;"><i class="fa fa-moon-o"></i></button></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <strong><?=$firstname?>  <?=$lastname?>  </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url().'index.php/profile/index'?>"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/lock' ?>"><i class="fa fa-lock fa-lg"></i> Lock</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?=$firstname?>  <?=$lastname?></a></strong></li>
                    </ul>
                </li>
            </ul>
            <?php } else { ?>
            <button id="darkModeToggle" class="btn btn-outline-secondary" style="margin-top: 8px; margin-right: 15px; float: right; position: relative; z-index: 1000;"><i class="fa fa-moon-o"></i></button>
            <div class="buttons home-auth-buttons">
                <a href="<?php echo base_url().'index.php/signup/index'?>"><button type="button" class="btn btn-default">Sign Up</button></a>
                <a href="<?php echo base_url().'index.php/login/index'?>"><button type="button" class="btn btn-info">Log in</button></a>     
            </div>
            <?php } ?>
        </nav> <!-- Closing nav from navbar-static-top -->
        <!-- Removed duplicate </nav> and other stray closing tags like </font> </a> </div> -->

        <div id="page-wrapper" class="custom-page-wrapper">
            <hr/>
            <h2>Popular Posts</h2><hr/>
            <div class="pa popular-posts-area">
                <div class="row popular-posts-row">
                    <?php if(!isset($posts) || empty($posts)){ ?>
                        <div class="col-12">
                            <h2>There are currently no posts on my blog.</h2>
                        </div>
                    <?php } else {
                        foreach ($posts as $row) { ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="card post-card h-100">
                                <div class="card-video-top">
                                    <iframe width="100%" height="170" frameborder="0" allowfullscreen src="<?= $row['video'];?>?controls=0&showinfo=0"></iframe>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo base_url()?>index.php/posts/readpost/<?=$row['id']?>/<?=$row['cate']?>"><?= $row['title'];?></a></h5>
                                    <?php /* Add other post details here if available and desired, e.g., category, date */ ?>
                                </div>
                            </div>
                        </div>
                    <?php }    
                    } ?>
                </div> <!-- Closing div for .row.popular-posts-row -->
            </div> <!-- Closing div for .pa.popular-posts-area -->

            <div class="col home-pagination-col">
                <p class="pages-link"><?=$pages; ?></p>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Removed extra </div> and </html> here, it's at the very end -->

    <!-- jQuery -->
<script src="<?php echo base_url().'assets/js/dark-mode-toggle.js';?>"></script>
</body>
</html>
<?php
// Removed extra } here that was causing a syntax error. 
// The main check for $posts should determine if we iterate or show "no posts".
// The closing PHP brace for the "else" part of if(!isset($posts)) was missing.
// It appears there was an overall issue with conditional rendering of posts vs no posts message.
// The original code had a stray `}` after the main HTML closing tag.
// The provided diff had some structural issues with how the PHP `else` for `!isset($posts)` was handled.
// I'm aiming to correct the structure based on typical PHP templating.
// The last `}` was removed as it seemed to be outside any PHP block.
// The original file has `foreach ($posts as $row) { ... } }` then `</div></div>`
// The `</div></div>` should be `</div>` for `pa` and then `</div>` for `page-wrapper` if the structure is nested.
// However, the structure shows popular-posts-area closing, then pagination col, then page-wrapper closing.
// The `</div></div>` after the loop was problematic. One `</div>` is for `popular-posts-area`.
// The final `}` was outside any PHP block.
?>

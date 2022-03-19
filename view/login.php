
<!DOCTYPE HTML>
<html>
<head>
<title>Blog PHP/OOP</title>
<link href="content/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="content/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blog created with PHP/OOP using the MVC architecture and bootstrap." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="content/js/jquery.min.js"></script>
<?php if($_SERVER['REQUEST_URI'] == ROOT_HOME): ?>
	<script src="content/js/contact_me.js"></script>
<?php endif ?>
<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=3;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>

</head>
<body>
<!-- header -->
<div class="banner">
	<div class="container">
		
				<div class="head-nav">
					
						<ul class="cl-effect-15">
							<li><a href="<?=ROOT_URL?>">HOME</a></li>
							<li><a href="<?=ROOT_URL?>?p=blogController&amp;a=blogPosts" data-hover="BLOG">BLOG</a></li>
                            <?php if(empty($_SESSION['active'])): ?>
                                <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=login" data-hover="LOGIN">LOGIN</a></li>
                            <?php elseif(!empty($_SESSION['active'])) : ?>
                                <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=add" data-hover="ADD A NEW POST">ADD A NEW POST</a></li>
                                <li><a href="<?=ROOT_URL?>?p=blogController&amp;a=logout" data-hover="LOGOUT">LOGOUT</a></li>
                            <?php endif ?>
                            <div class="clearfix"> </div>
						</ul>
				</div>

						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							
						  });
						});
					</script>
									 
	</div> 
</div>

    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="load_more">
                <div class="row">

                    <div class="col-lg-8 col-lg-offset-2">

                        <h1>Login</h1>

                        <?php if (!empty($this->msgError)): ?>
                            <p class="msg"><?=$this->msgError?></p>
                        <?php endif ?>

                        <?php if (!empty($this->msgSuccess)): ?>
                            <b><p class="msg"><?=$this->msgSuccess?></p></b>
                        <?php endif ?>


                            <form method="post" action="" role="form">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username">Username * </label><br/>
                                                <small> For testing purposes, username is : admin</small>
                                                <input id="username" type="text" name="username" class="form-control" placeholder="Enter your username." required="required" data-error="Username is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Password *</label><br/>
                                                <small><a href="<?=ROOT_URL?>?p=blogController&amp;a=changePwd">Change password?</a></small>
                                                <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password." required="required" data-error="Author is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="add_submit" class="btn btn-success btn-send" value="Login">
                                        </div>
                                       
                                    </div>

                            </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content -->


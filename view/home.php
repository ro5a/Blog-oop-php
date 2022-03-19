
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

					
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							
						  });
						});
					</script>
									 
	</div> 
</div>


<div class="content">
	<div class="container">
	 <div class="load_more">	
				<h3></h3>
				 
				<div class="biography">
					<div class="biographys">
						<div class="col-md-4 biography-info">
							
						</div>
						<div class="col-md-8 biography-into">
							<h4>Roaa</h4>
							<p>I love writing code and I am really like learn it. <br/> 
								
								
								
							</p>
						</div>
					</div>
				</div>
				
				


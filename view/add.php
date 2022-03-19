

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
		<div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <h1>Add a new blog post</h1>

                <?php if (!empty($this->msgError)): ?>
					<p class="msg"><?=$this->msgError?></p>
				<?php endif ?>

				<?php if (!empty($this->msgSuccess)): ?>
					<p class="msg"><?=$this->msgSuccess?></p>
				<?php endif ?>


                <form method="post" action="" role="form">

                    <div class="messages"></div>

                    <div class="controls">
						
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title * </label>
                                    <input id="title" type="text" name="title" class="form-control" placeholder="Please enter the post's title *" required="required" data-error="The title is required.">
                                    <div class="help-block with-errors"></div>
									<small> Title needs to be a maximum of 50 characters</small>
                                </div>
                            </div>
						</div>
						<div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="author">Author *</label>
                                    <input id="author" type="text" name="author" class="form-control" placeholder="Please enter your name *" required="required" data-error="Author is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="small_desc">Small description *</label>
                                    <textarea id="small_desc" name="small_desc" class="form-control" placeholder="Write here a small description of your post that'll appear in the Blog page. Make it short and on point. *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Content *</label>
                                    <textarea id="content" name="content" class="form-control" placeholder="Content of your post *" rows="4" required="required" data-error="Kindly write your post's content"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="add_submit" class="btn btn-success btn-send" value="Add">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
	 </div>
	</div>
</div>

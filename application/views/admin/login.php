<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Login Page</title>
<link rel="stylesheet" href="<?=base_url();?>admin/css/style.css" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.loginform button').hover(function(){
		$(this).stop().switchClass('default','hover');
	},function(){
		$(this).stop().switchClass('hover','default');
	});
	
	$('#login').submit(function(){
		var u = jQuery(this).find('#username');
		if(u.val() == '') {
			jQuery('.loginerror').slideDown();
			u.focus();
			return false;	
		}
	});
	
	$('#username').keypress(function(){
		jQuery('.loginerror').slideUp();
	});
});
</script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="login">

<div class="loginbox radius3">
	<div class="loginboxinner radius3">
    	<div class="loginheader">
    		<h1 class="bebas">Log In</h1>
        	
    	</div><!--loginheader-->
        
        <div class="loginform">
        	<div class="loginerror"></div>
			 <?=form_open('adminlog/admin_login')?>
			 <?php if(isset($error))
	            {
	            	echo $error;
					echo '<br/>';
	            }
	            ?>
            	<?php echo validation_errors(); ?>
            	<p>
                	<label for="username" class="bebas">Username</label>
                    <input type="text" id="username" name="username" class="radius2" />
                </p>
                <p>
                	<label for="password" class="bebas">Password</label>
                    <input type="password" id="password" name="password" class="radius2" />
                </p>
                <p>
                	<button class="radius3 bebas">Sign in</button>
                </p>
                <p><a href="#" class="whitelink small">Can't access your account?</a></p>
            <?=form_close()?>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->

</body>

</html>

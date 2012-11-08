<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $this->settings->site_name; ?> - <?php echo lang('login_title');?></title>
	
	<base href="<?php echo base_url(); ?>" />
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="robots" content="noindex, nofollow" />

	<?php Asset::css(array('main/style.css', 'main/responsive.css', 'main/animate.css', 'jquery/colorbox.css', 'codemirror.css')); ?>
	<?php Asset::css('admin/login.css'); ?>
	<?php Asset::js('jquery/jquery.js'); ?>
	<?php Asset::js('admin/login.js'); ?>
	<?php echo Asset::render() ?>

</head>

<body id="login" class="noise">

	<div class="container">
	<div class="account-container animated fadeIn" id="login-panel">
		
		<div class="content clearfix">
			
			<div id="login-logo"></div>
			
			<?php echo form_open('admin/login', array('class' => 'form-horizontal')); ?>		
						
				<div class="control-group">
					
					<?php $this->load->view('admin/partials/notices') ?>
					
					<div class="input-prepend">
						<span class="add-on">$</span>
						<input class="span4" id="prependedInput" type="text" name="email" placeholder="<?php echo lang('global:email'); ?>" />
						<!-- <?php echo Asset::img('admin/email-icon.png', lang('global:email'), array('class' => 'input-email'));?> -->
					</div> <!-- /field -->
				
					<div class="input-prepend">
						<span class="add-on">$</span>
						<input class="span4" id="prependedInput" type="password" name="password" placeholder="<?php echo lang('global:password'); ?>" />
						<!-- <?php echo Asset::img('admin/lock-icon.png', lang('global:password'), array('class' => 'input-password'));?> -->
					</div> <!-- /password -->
					
				</div> <!-- /login-fields -->
				
				<div class="login-actions">
					<label for="remember" class="checkbox remember muted">
						<input class="remember" class="remember" id="remember" type="checkbox" name="remember" value="1" />
						<?php echo lang('user_remember'); ?>
					</label>										
					<button class="btn btn-primary">Sign In</button>
					
				</div> <!-- .actions -->
				
			<?php echo form_close(); ?>
			
		</div> <!-- /content -->
		
	</div> <!-- /account-container -->
	</div>
		
</body>
</html>
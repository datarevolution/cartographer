<html>
        <head>
            <title>Map Editing Tool</title>
			<link rel="stylesheet" href="/cartographer/leaflet.css" />
			<link rel="stylesheet" href="/cartographer/cartographer.css" />
			<script src="/cartographer/leaflet.js"></script>
			<script src="/cartographer/jquery-3.2.1.min.js"></script>   
  
        </head>
        <body>

		<ul id="nav">
			<li><a href="/cartographer/index.php/coops/">Show all</a></li>
			<li><a href="/cartographer/index.php/coops/create/">Add new co-op</a></li>
		<?php
			$link_protocol = USE_SSL ? 'https' : NULL;

			if( $this->router->default_controller == 'examples/home' )
			{
		?>
		<li>
			<?php echo anchor( site_url('', $link_protocol ),'Home'); ?>
		</li>
		<?php
			}
		?>
		<li><?php
			if( isset( $auth_user_id ) ){
				echo anchor( site_url('examples/logout', $link_protocol ),'Logout');
			}else{
				echo anchor( site_url(LOGIN_PAGE . '?redirect=coops', $link_protocol ),'Login','id="login-link"');
			}
		?></li>

		</ul>
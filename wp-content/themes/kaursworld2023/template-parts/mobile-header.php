<div class="header__wrap">
	<div class="container">
		<div class="inner-header__wrap flex column-direction mobile__wrap">
			<div class="top__wrap flex justify-spacebetween width-100">
				<div class="header__center width-100 align-center">
					<div class="site-branding">
						<?php
					the_custom_logo();
					?>
				</div>
				<div class="header__right">
				<div class="navbar custom-navbar" role="navigation">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container-fluid mob__menu container orange-br-top">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
									?>
							</div>
						</div>
						</nav>
					</div><!-- Navigation -->
				</div>
			</div>
			
		</div>
	</div>
	
</div>
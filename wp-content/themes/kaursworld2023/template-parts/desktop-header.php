<div class="header__wrap">
		<div class="container">
			<div class="inner-header__wrap flex align-center justify-spacebetween">
				<div class="header__left">
					<p>Need help? Call Us</p>
					<p><strong><a href="tel:+13654762955">+1 365-476-2955</a></strong></p>
				</div>
				<div class="header__center">
					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
					</div>
				</div>
				<div class="header__right">
					<button class="yellow__btn"><a href="/contact/">Let's Connect</a></button>
				</div>
			</div>
		</div>
		</div>
		<div class="menu-custom__wrap container orange-br-top">
			<div class="navbar custom-navbar" role="navigation">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="container-fluid mob__menu ">
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
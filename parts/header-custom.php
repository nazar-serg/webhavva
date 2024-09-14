<header class="header">
	<div class="header__container">
		<div class="header__row">
			<div class="header__logo">
				<?php if (has_custom_logo()) {
					the_custom_logo();
				}
				?>
			</div>
			<div class="header__nav">
				<nav class="nav">
					<?php
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class'      => 'nav__list',
					'link_class'      => 'nav__link',
					'add_li_class'    => 'nav__item',
					'container'       => 'null',	
                ) );
            ?>
				</nav>
			</div>
			<div class="header__nav-btn">
				<button class="nav-icon-btn">
					<div class="nav-icon"></div>
				</button>
			</div>
			<div class="header__buttons">
				<a href="#" class="header__book-a-call">Book a call</a>
				<a href="#" class="header__contact-us">Contact Us</a>
			</div>
		</div>
	</div>
</header>
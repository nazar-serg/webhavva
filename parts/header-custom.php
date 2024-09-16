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
				<?php 
				$header_book_call = get_field('header_book_a_call', 'option');
				if( $header_book_call ): 
					$link_url = $header_book_call['url'];
					$link_title = $header_book_call['title'];
					$link_target = $header_book_call['target'] ? $header_book_call['target'] : '_self';
					?>
				<a class="header__book-a-call" href="<?php echo esc_url( $link_url ); ?>"
					target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>

				<?php 
				$header_contact_us = get_field('header_contact_us', 'option');
				if( $header_book_call ): 
					$link_url = $header_contact_us['url'];
					$link_title = $header_contact_us['title'];
					$link_target = $header_contact_us['target'] ? $header_contact_us['target'] : '_self';
					?>
				<a class="header__contact-us" href="<?php echo esc_url( $link_url ); ?>"
					target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
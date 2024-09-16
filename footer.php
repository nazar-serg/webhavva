<footer class="footer">
	<div class="footer__container">
		<div class="footer__title">
			<span class="footer__title--part-one"><?php the_field("footer_title_part_1", "option"); ?></span>
			<span class="footer__title--part-two"><?php the_field("footer_title_part_2", "option"); ?></span>
		</div>
		<div class="footer__body">
			<div class="footer__column-left">
				<div class="footer__form">
					<?php
					$form = get_field("footer_form", "option"); 
					echo do_shortcode($form);
					?>
				</div>
			</div>
			<div class="footer__column-right">
				<div class="footer__social">
					<?php
					$socials = get_field("footer_social", "option");
					if ($socials) : ?>
					<ul>
						<?php foreach($socials as $social) :
						$icon = $social['icon'];
					?>
						<li>
							<a href="<?php echo $social["link"]; ?>">
								<img src="<?php echo $icon; ?>" alt="icon">
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
				<div class="footer__menu">
					<div class="footer__menu-left">
						<nav>
							<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_menu_left',
							'menu_class'      => 'footer__menu-list',
							'link_class'      => 'footer__menu-link',
							'add_li_class'    => 'footer__menu-item',
							'container'       => 'null',	
						) );
					?>
						</nav>
					</div>
					<div class="footer__menu-right">
						<nav>
							<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_menu_right',
							'menu_class'      => 'footer__menu-list',
							'link_class'      => 'footer__menu-link',
							'add_li_class'    => 'footer__menu-item',
							'container'       => 'null',	
						) );
					?>
						</nav>
					</div>
					<div class="footer__logo">
						<?php 
						$logo = get_field('footer_logo', 'option');
						$size = 'full';
						if( $logo ) {
							echo wp_get_attachment_image( $logo, $size );
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__info">
			<?php if( have_rows('footer_info', 'option') ): ?>
			<ul>
				<?php while( have_rows('footer_info', 'option') ): the_row(); 
            $link_text = get_sub_field('text');
            $link_url = get_sub_field('link');
        ?>
				<li>
					<a href="<?php echo esc_url($link_url); ?>" target="_blank">
						<?php echo esc_html($link_text); ?>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

		</div>
	</div>

</footer>
<?php wp_footer(); ?>
</body>

</html>
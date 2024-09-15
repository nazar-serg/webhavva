<?php
/**
 * Template Name: Home template
 */
get_header();
?>
<section id="hero" class="hero">
	<?php get_template_part('parts/header', 'custom'); ?>
	<div class="hero__container">
		<div class="hero__content">
			<h1 class="hero__title">
				<span class="hero__title-part-one"><?php the_field("hero_title_part_1"); ?></span>
				<span class="hero__title-part-two"><?php the_field("hero_title_part_2"); ?></span>
				<span class="hero__title-part-three"><?php the_field("hero_title_part_3"); ?></span>
			</h1>
			<div class="hero__text">
				<p><?php the_field("herro_text"); ?></p>
			</div>
			<div class="hero__button">
				<?php 
				$link = get_field('herro_btn');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<a class="hero__btn-link button" href="<?php echo esc_url( $link_url ); ?>"
					target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section id="our-plans" class="our-plans">
	<h2 class="our-plans__title">
		<?php $title_our_plans = get_field("plans_title");
			foreach($title_our_plans as $elem) : ?>
		<span><?php echo $elem['title']; ?></span>
		<?php endforeach; ?>
	</h2>
	<div class="our-plans__body">
		<div class="our-plans__container">
			<div class="our-plans__content">
				<div class="our-plans__heading">
					<h3 class="our-plans__subtitle">
						<?php the_field("plans_sub_title"); ?>
					</h3>
					<div class="our-plans__headline_with_asterisk">
						<?php the_field("headline_with_asterisk"); ?>
					</div>
				</div>
				<div class="our-plans__tabs">
					<div class="tabs">
						<button class="tab-button active" data-tab="1"><?php the_field("tabs_one"); ?></button>
						<button class="tab-button"
							data-tab="2"><?php the_field("tabs_two"); ?><span>-10%</span></button>
						<button class="tab-button"
							data-tab="3"><?php the_field("tabs_three"); ?><span>-20%</span></button>
					</div>
					<div class="tabs__content">
						<div class="tab-content active" id="tab-1">
							<div class="tab-content__body">
								<div class="tab-content__column">
									<?php 
									$monthly_group = get_field("group_monthly_1");
									if ($monthly_group) :
									$title = $monthly_group['title'];
									$words = explode(' ', $title );
									if (count($words) > 1) : ?>
									<h2 class="tab-content__title">
										<?php echo $words[0]. '<br>' . implode(' ', array_slice($words, 1)); ?>
									</h2>
									<?php else: ?>
									<?php echo $title; ?>
									<?php endif; ?>
									<div class="tab-content__price"><?php echo $monthly_group['price']; ?></div>
									<h3 class="tab-content__sub-title"><?php echo $monthly_group['sub_title']; ?></h3>
									<?php
										$link = $monthly_group['button'];
										$url = $link['url'];
										$title = $link['title'];
										$target = $link['target'] ? $link['target'] : '_self';
									?>
									<div class="tab-content__btn">
										<a class="tab-content__link button button--str" href="<?php echo $url; ?>">
											<?php echo $title; ?></a>
									</div>
									<?php endif; ?>
									<div class="tab-content__text tab-content__text--concept-design">
										<?php echo $monthly_group['text']; ?>
									</div>
								</div>

								<div class="tab-content__column">
									<?php 
									$monthly_group = get_field("group_monthly_2");
									if ($monthly_group) :
									$title = $monthly_group['title'];
									$words = explode(' ', $title );
									if (count($words) > 1) : ?>
									<h2 class="tab-content__title">
										<?php echo $words[0]. '<br>' . implode(' ', array_slice($words, 1)); ?>
									</h2>
									<?php else: ?>
									<?php echo $title; ?>
									<?php endif; ?>
									<div class="tab-content__price"><?php echo $monthly_group['price']; ?></div>
									<h3 class="tab-content__sub-title"><?php echo $monthly_group['sub_title']; ?></h3>
									<?php
										$link = $monthly_group['button'];
										$url = $link['url'];
										$title = $link['title'];
										$target = $link['target'] ? $link['target'] : '_self';
									?>
									<div class="tab-content__btn">
										<a class="tab-content__link button button--str" href="<?php echo $url; ?>">
											<?php echo $title; ?></a>
									</div>
									<?php endif; ?>
									<div class="tab-content__text tab-content__text--product-development">
										<?php echo $monthly_group['text']; ?>
									</div>
								</div>

								<div class="tab-content__column">
									<?php 
									$monthly_group = get_field("group_monthly_3");
									if ($monthly_group) :
									$title = $monthly_group['title'];
									$words = explode(' ', $title );
									if (count($words) > 1) : ?>
									<h2 class="tab-content__title">
										<?php echo $words[0]. '<br>' . implode(' ', array_slice($words, 1)); ?>
									</h2>
									<?php else: ?>
									<?php echo $title; ?>
									<?php endif; ?>
									<div class="tab-content__price"><?php echo $monthly_group['price']; ?></div>
									<h3 class="tab-content__sub-title"><?php echo $monthly_group['sub_title']; ?></h3>
									<?php
										$link = $monthly_group['button'];
										$url = $link['url'];
										$title = $link['title'];
										$target = $link['target'] ? $link['target'] : '_self';
									?>
									<div class="tab-content__btn">
										<a class="tab-content__link button button--str" href="<?php echo $url; ?>">
											<?php echo $title; ?></a>
									</div>
									<?php endif; ?>
									<div class="tab-content__text">
										<?php echo $monthly_group['text']; ?>
									</div>
								</div>

								<div class="tab-content__column tab-content__column--last-child">
									<?php 
									$monthly_group = get_field("group_monthly_4");
									if ($monthly_group) :
									$title = $monthly_group['title'];
									$words = explode(' ', $title );
									if (count($words) > 1) : ?>
									<h2 class="tab-content__title">
										<?php echo $words[0]. '<br>' . implode(' ', array_slice($words, 1)); ?>
									</h2>
									<?php else: ?>
									<h2 class="tab-content__title">
										<?php echo $title; ?>
									</h2>
									<?php endif; ?>
									<?php
										$link = $monthly_group['button'];
										$url = $link['url'];
										$title = $link['title'];
										$target = $link['target'] ? $link['target'] : '_self';
									?>
									<?php endif; ?>
									<div class="tab-content__text">
										<?php echo $monthly_group['text']; ?>
									</div>
									<div class="tab-content__btn tab-content__btn--last-column">
										<a class="tab-content__link button button--str" href="<?php echo $url; ?>">
											<?php echo $title; ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class=" tab-content" id="tab-2">Content for Tab 2
						</div>
						<div class="tab-content" id="tab-3">Content for Tab 3</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
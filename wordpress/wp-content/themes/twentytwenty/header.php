<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group container">

		<div class="header-inner section-inner">

			<div class="header-titles-wrapper">

				<?php

				// Check whether the header search is activated in the customizer.
				$enable_header_search = get_theme_mod('enable_header_search', true);

				if (true === $enable_header_search) {

				?>

					<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal"
						data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
						aria-expanded="false">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg('search'); ?>
							</span>
							<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
						</span>
					</button><!-- .search-toggle -->

				<?php } ?>

				<!-- <div class="header-titles">

					<?php
					// Site title or logo.
					twentytwenty_site_logo();

					// Site description.
					twentytwenty_site_description();
					?>

				</div> -->



				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
					data-toggle-body-class="showing-menu-modal" aria-expanded="false"
					data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php twentytwenty_the_theme_svg('ellipsis'); ?>
						</span>
						<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
					</span>
				</button><!-- .nav-toggle -->

				<!-- home -->
				<div class="custom-header-home">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="home-link fs-2"> Home
						<?php twentytwenty_the_theme_svg('home'); ?>
						<span class="screen-reader-text"><?php _e('Home', 'twentytwenty'); ?></span>
					</a>
				</div> <!-- .custom-header-home -->

				<!-- Custom search form in header for larger screens -->
				<div class="custom-header-search">
					<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<input type="search" style="border-radius: 10px;" class="search-field"
							placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'twentytwenty'); ?>"
							value="<?php echo get_search_query(); ?>" name="s" />
						<button type="submit"
							class="search-submit"><?php echo esc_html_x('Submit', 'submit button', 'twentytwenty'); ?></button>
					</form>
				</div>
				<!-- .custom-header-search -->

			</div><!-- .header-titles-wrapper -->



			<div class="header-navigation-wrapper">

				<?php
				if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
				?>

					<nav class="primary-menu-wrapper"
						aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">

						<ul class="primary-menu reset-list-style">

							<?php
							if (has_nav_menu('primary')) {

								wp_nav_menu(
									array(
										'container' => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							} elseif (!has_nav_menu('expanded')) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker' => new TwentyTwenty_Walker_Page(),
									)
								);
							}
							?>

						</ul>

					</nav><!-- .primary-menu-wrapper -->

				<?php
				}

				if (true === $enable_header_search || has_nav_menu('expanded')) {
				?>

					<div class="header-toggles hide-no-js">

						<?php
						if (has_nav_menu('expanded')) {
						?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal"
									data-toggle-body-class="showing-menu-modal" aria-expanded="false"
									data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg('ellipsis'); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

						<?php
						}

						if (true === $enable_header_search) {
						?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal"
									data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
									aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg('search'); ?>
										<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<!-- .account -->
							<div class="header-account">
								<div class="account-menu">
									<?php if (is_user_logged_in()):
										$current_user = wp_get_current_user();
									?>
										<span class="account-avatar">
											<?php echo get_avatar($current_user->ID, 32); ?>
										</span>
										<span class="account-name">
											<?php echo esc_html($current_user->display_name); ?>
										</span>
										<div class="account-dropdown">
											<ul>
												<li><a href="<?php echo esc_url(admin_url('profile.php')); ?>">Profile</a></li>
												<li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a></li>
											</ul>
										</div>
									<?php else: ?>
										<span class="account-avatar">
											<?php echo get_avatar(0, 32, 'mysteryman'); // Ảnh default: icon user mystery 
											?>
										</span>
										<span class="account-name">Account <i class="fa-solid fa-play"></i> </span>
										<div class="account-dropdown">
											<ul>
												<li><a href="<?php echo esc_url(wp_login_url()); ?>">Login</a></li>
												<li><a href="<?php echo esc_url(wp_registration_url()); ?>">Register</a></li>
											</ul>
											</ul>
										</div>
									<?php endif; ?>
								</div>
							</div> <!-- .header-account -->

						<?php
						}
						?>

					</div><!-- .header-toggles -->
				<?php
				}
				?>

			</div><!-- .header-navigation-wrapper -->

		</div><!-- .header-inner -->

		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>

	</header><!-- #site-header -->


	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
	?>
	<style>
		/* --- HOME LINK --- */

		.custom-header-home {
			margin: 5px 3px;
			width: max-content;
			height: max-content;
			color: #222;
			background: #f8f8f8;


		}

		.custom-header-home .home-link {
			/* display: inline-flex; */
			align-items: center;
			gap: 6px;
			font-weight: 500;
			font-size: 30px;
			color: #222;
			text-decoration: none;
			padding: 20px 12px;
			border-radius: 6px;
			transition: all 0.25s ease;
			padding: 12px 5px;
			margin-right: 50px;
		}

		.custom-header-home .home-link:hover {

			background-color: #adaaaa;
			color: #000;
		}

		.custom-header-home svg {
			width: max-content;
			height: max-content;
			fill: currentColor;
		}

		/* --- SEARCH BAR --- */
		.custom-header-search {
			/* margin-left: 20px; */
			flex-grow: 1;
			max-width: 420px;
		}



		.custom-header-search .search-submit {
			background: #fff;
			border: none;
			color: #000;
			font-size: 14px;
			font-weight: 600;
			border: #333 1px solid;
			border-radius: 10px;
			cursor: pointer;
			transition: background 0.25s ease;
		}

		.custom-header-search .search-submit:hover {
			background: #005f8d;
			color: #fff;
		}

		/* === ACCOUNT MENU === */
		.header-account {
			position: relative;
		}

		.header-account .account-menu {
			display: flex;
			flex-direction: column;
			align-items: center;
			cursor: pointer;
			font-size: 14px;
			color: #333;
			font-weight: 500;
			border-radius: 6px;
			transition: background 0.25s ease;
			gap: 8px;
			/* Khoảng cách giữa ảnh và chữ */
		}

		.header-account .account-menu:hover {
			background-color: #f5f5f5;
		}

		.header-account .account-avatar img {
			border-radius: 50%;
			width: 32px;
			height: 32px;
			display: block;
			/* Đảm bảo ảnh default cũng fit */
		}

		.header-account .account-name {
			font-size: 14px;
			color: #222;
			white-space: nowrap;
			/* Ngăn chữ "Account" wrap line */
		}

		/* Phần dropdown giữ nguyên như cũ */
		.header-account .account-dropdown {
			display: none;
			position: absolute;
			right: 0;
			top: 100%;
			/* Giảm từ 110% xuống 100% để sát hơn, giảm gap */
			background: #fff;
			border: 1px solid #ddd;
			border-radius: 6px;
			min-width: 160px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			z-index: 999;
			opacity: 0;
			/* Thêm để dùng transition */
			visibility: hidden;
			/* Thay vì display: none để transition mượt */
			transform: translateY(-10px);
			/* Hiệu ứng slide nhẹ */
			transition: opacity 0.2s ease, visibility 0.2s ease, transform 0.2s ease;
		}

		.header-account .account-dropdown ul {
			margin: 0;
			padding: 6px 0;
			list-style: none;
		}

		.header-account .account-dropdown li {
			margin: 0;
		}

		.header-account .account-dropdown a {
			display: block;
			padding: 8px 14px;
			font-size: 14px;
			color: #333;
			text-decoration: none;
			transition: background 0.2s ease;
		}

		.header-account .account-dropdown a:hover {
			background-color: #f5f5f5;
			color: #0073aa;
		}

		/* Hiện dropdown khi hover */
		.header-account:hover .account-dropdown {
			display: block;
			opacity: 1;
			visibility: visible;
			transform: translateY(0);
			transition-delay: 0.1s;
			/* Delay nhỏ khi hiện, giữ dropdown lâu hơn */
		}

		body:not(.overlay-header) .primary-menu>li>a {
			color: #000;
		}

		body:not(.overlay-header) .primary-menu>li>a:hover {
			color: #0073aa;
			text-decoration: none;
		}

		.header-inner {
			padding: 1.8rem 0;
		}
	</style>
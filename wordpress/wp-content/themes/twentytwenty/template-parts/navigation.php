<?php

/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {

	$pagination_classes = '';

	if (! $next_post) {
		$pagination_classes = ' only-one only-prev';
	} elseif (! $prev_post) {
		$pagination_classes = ' only-one only-next';
	}

?>

	<nav class="pagination-single-custom section-inner d-flex flex-column<?php echo esc_attr($pagination_classes); ?>" aria-label="<?php esc_attr_e('Post', 'twentytwenty'); ?>">

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

		<div class="pagination-single-inner d-flex flex-column">

			<?php
			if ($prev_post) {
			?>

				<a class="previous-post d-flex align-items-center" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
					<!-- Ngày đăng -->
					<div class="flex-custom">
						<div class="post-date d-flex align-items-center">
							<div class="d-flex flex-column" style="margin-right: 10px;">
								<div class="day"><?php echo get_the_date('d'); ?></div>
								<span class="month"><?php echo get_the_date('n'); ?></span>
							</div>
							<span class="year"><?php echo get_the_date('Y'); ?></span>
						</div>
					</div>
					<span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span></span>
				</a>

			<?php
			}

			if ($next_post) {
			?>

				<a class="next-post d-flex align-items-center" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
					<!-- Ngày đăng -->
					<div class="flex-custom">
						<div class="post-date d-flex align-items-center">
							<div class="d-flex flex-column" style="margin-right: 10px;">
								<div class="day"><?php echo get_the_date('d'); ?></div>
								<span class="month"><?php echo get_the_date('n'); ?></span>
							</div>
							<span class="year"><?php echo get_the_date('Y'); ?></span>
						</div>
					</div>
					<span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span></span>
				</a>
			<?php
			}
			?>

		</div><!-- .pagination-single-inner -->

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

	</nav><!-- .pagination-single -->

<?php
}

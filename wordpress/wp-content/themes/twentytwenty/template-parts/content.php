<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$class = '';
if (!is_single()) {
	$class = 'danh-sach';
}

?>

<?php if (is_single()) { ?>
	<article <?php post_class('single-post'); ?> id="post-<?php the_ID(); ?>">

		<!-- Ảnh đại diện -->
		<?php if (has_post_thumbnail()) : ?>
			<div class="single-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
		<?php endif; ?>

		<!-- Ngày đăng -->
		<div class="flex-custom">
			<div class="post-date">
				<div class="day"><?php echo get_the_date('d'); ?></div>
				<span class="month">Tháng <?php echo get_the_date('n'); ?></span>
				<span class="year"><?php echo get_the_date('Y'); ?></span>
			</div>
		</div>

		<!-- Nội dung bài viết -->
		<div class="post-content">
			<div class="flex-custom">
				<h1 class="post-title"><?php the_title(); ?></h1>

				<div class="post-meta">
					<span class="author"><?php the_author(); ?></span> |
					<span class="categories"><?php the_category(', '); ?></span>
				</div>
			</div>

			<div class="entry-content">
				<?php the_content(__('Continue reading', 'twentytwenty')); ?>
			</div>

			<!-- Phân trang bài viết nếu có -->
			<?php wp_link_pages(array(
				'before' => '<nav class="post-nav-links" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'  => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)); ?>

			<!-- Chỉnh sửa bài viết (nếu có quyền) -->
			<?php edit_post_link(); ?>
		</div>

		<!-- Tác giả (nếu có) -->
		<?php if (post_type_supports(get_post_type(), 'author')) : ?>
			<div class="entry-author-bio">
				<?php get_template_part('template-parts/entry-author-bio'); ?>
			</div>
		<?php endif; ?>

		<!-- Navigation bài viết tiếp theo/trước -->
		<div class="post-navigation">
			<?php get_template_part('template-parts/navigation'); ?>
		</div>

		<!-- Comment -->
		<?php if ((comments_open() || get_comments_number()) && !post_password_required()) : ?>
			<div class="comments-wrapper">
				<?php comments_template(); ?>
			</div>
		<?php endif; ?>

	</article><!-- .post -->
<?php	} else { ?>
	<article class="post">
		<!-- Cột trái: Ảnh đại diện -->
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('medium'); ?>
				<?php endif; ?>
			</a>
		</div>

		<!-- Cột phải: Ngày tháng + Nội dung -->
		<div class="post-main">
			<!-- Ngày đăng -->
			<div class="post-date">
				<div class="day"><?php echo get_the_date('d'); ?></div>
				<span class="month">Tháng <?php echo get_the_date('n'); ?></span>
				<span class="year"><?php echo get_the_date('Y'); ?></span>
			</div>

			<!-- Nội dung -->
			<div class="post-content">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="post-meta">
					<?php the_category(', '); ?>
				</div>
				<div class="post-excerpt">
					<?php echo get_the_excerpt(); ?>
				</div>
			</div>
		</div>
	</article><!-- .post -->
<?php } ?>
<?php

/**
 * Template Name: Single Post
 * Template file for displaying single posts
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <!-- Thêm đoạn mã ngày đăng trước tiêu đề -->
                    <div class="flex-custom">
                        <div class="post-date d-flex align-items-center">
                            <div class="d-flex flex-column" style="margin-right: 10px;">
                                <div class="day"><?php echo get_the_date('d'); ?></div>
                                <span class="month"><?php echo get_the_date('n'); ?></span>
                            </div>
                            <span class="year"><?php echo get_the_date('Y'); ?></span>
                        </div>
                    </div>

                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php // Các thông tin footer của bài viết (nếu có) 
                    ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

        <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
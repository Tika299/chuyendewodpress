<?php

/**
 * Template for the user modal in Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<div class="modal user-modal" id="user-modal" aria-hidden="true">
    <div class="modal-inner">
        <div class="modal-content">
            <button class="modal-close" data-toggle-target=".user-modal" data-toggle-body-class="showing-user-modal" aria-expanded="false">
                <span class="screen-reader-text"><?php _e('Đóng', 'twentytwenty'); ?></span>
                <?php twentytwenty_the_theme_svg('cross'); ?>
            </button>
            <div class="modal-content-inner">
                <?php
                if (is_user_logged_in()) {
                    // Nội dung cho người dùng đã đăng nhập
                    $current_user = wp_get_current_user();
                ?>
                    <h2><?php _e('Tài khoản của bạn', 'twentytwenty'); ?></h2>
                    <p><?php printf(__('Xin chào, %s', 'twentytwenty'), esc_html($current_user->display_name)); ?></p>
                    <ul class="user-menu">
                        <li><a href="<?php echo esc_url(get_edit_user_link()); ?>"><?php _e('Hồ sơ', 'twentytwenty'); ?></a></li>
                        <li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><?php _e('Đăng xuất', 'twentytwenty'); ?></a></li>
                    </ul>
                <?php
                } else {
                    // Nội dung cho người dùng chưa đăng nhập
                ?>
                    <h2><?php _e('Đăng nhập', 'twentytwenty'); ?></h2>
                    <form action="<?php echo esc_url(wp_login_url()); ?>" method="post" class="user-field">
                        <p>
                            <label for="user_login"><?php _e('Tên đăng nhập hoặc Email', 'twentytwenty'); ?></label>
                            <input type="text" name="log" id="user_login" class="user-field" required>
                        </p>
                        <p>
                            <label for="user_pass"><?php _e('Mật khẩu', 'twentytwenty'); ?></label>
                            <input type="password" name="pwd" id="user_pass" class="user-field" required>
                        </p>
                        <p>
                            <input type="submit" value="<?php _e('Đăng nhập', 'twentytwenty'); ?>">
                        </p>
                        <p>
                            <a href="<?php echo esc_url(wp_registration_url()); ?>"><?php _e('Đăng ký', 'twentytwenty'); ?></a> |
                            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php _e('Quên mật khẩu?', 'twentytwenty'); ?></a>
                        </p>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="modal-overlay" data-toggle-target=".user-modal" data-toggle-body-class="showing-user-modal"></div>
</div>
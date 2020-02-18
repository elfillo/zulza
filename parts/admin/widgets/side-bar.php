<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Виджеты сайдбара', 'zulza' ); ?>">
        <?php
        if ( is_active_sidebar( 'sidebar-1' ) ) {
            ?>
            <div class="widget-column sidebar-widget-1">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
            <?php
        }
        ?>
    </aside><!-- .widget-area -->

<?php endif; ?>

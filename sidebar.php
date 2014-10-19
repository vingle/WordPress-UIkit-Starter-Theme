<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @author nstaeger
 * @since 2014-08-31
 */
?>

<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
    <aside class="nst-sidebar">
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </aside>
<?php endif; ?>

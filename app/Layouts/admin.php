<?php get_header_admin(); ?>
<?php get_partials('Admin/partials/navbar') ?>
<div id="page-body" class="d-flex">
    <?php get_partials('Admin/partials/sidebar') ?>
    <div id="wp-content">
        <?= $content ?>
    </div>
</div>
<?php get_footer_admin(); ?>

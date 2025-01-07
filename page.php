<?php get_header(); ?>
<section class="page-wrap">
<div class="container">

<section class="row">
    <?php if (is_active_sidebar('page-sidebar')): ?>
        <!-- Sidebar column only renders if there's content -->
        <div class="col-lg-3">
            <?php dynamic_sidebar('page-sidebar'); ?>
        </div>
        <div class="col-lg-9">
    <?php else: ?>
        <!-- Full-width content column when no sidebar -->
        <div class="col-lg-12">
    <?php endif; ?>

        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <?php get_template_part('includes/section', 'content'); ?>
    </div>
</section>
</div>
</section>

<?php get_footer(); ?>
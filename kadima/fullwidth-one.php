<?php //Template Name:Full-Width one
    get_header();
    get_template_part('breadcrums'); ?>
    <div class="container">
        <div class="row kadima_blog_wrapper">
            <div class="col-md-12">
                <?php get_template_part('post','page'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
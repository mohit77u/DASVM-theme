<?php /* Template Name: Front-Page-template */ ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; ?>
<section class="blog_w3ls pb-lg-5 pb-4" id="posts">
    <div class="container py-sm-5 py-4">
        <div class="title-desc text-center pb-sm-3 mb-lg-5">
            <h3 class="main-title-w3pvt">Latest blogs</h3>
        </div>
        <div class="row mt-4">
            <?php    
                $args3 =array(
                    'type'              => 'posts',
                    'posts_per_page'    => 6,
                );
                include('blogListLoop.php');
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
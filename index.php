<?php get_header(); ?> 
    <main class="container mt-5">
        <?php while ( have_posts() ) : the_post();?>
        <div class="row pd-3">
            <h1 class=""><?php the_title()?></h1>
        </div>
        <div class="row py-3">
            <p><?php the_content(); ?></p>
        </div>
        <?php endwhile; ?>
    </main>
<?php get_footer(); ?>
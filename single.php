<?php get_header(); ?>
    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('entry entry--single') ?> id="post-<?php the_ID(); ?>">
            <header class="entry__header">
                <h1 class="entry__title entry__title--single"><?php the_title(); ?></h1>
            </header>
            <div class="entry__content entry__content--single">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; // End the loop ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<body>
    <div class="main container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <article class="post">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <div class="meta">
                Created By <?php the_author(); ?> on <?php echo get_the_date(); ?>
                </div>
                <?php the_excerpt() ?>
            </article>
        <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop('Sorry, No posts were found') ?>
        <?php endif; ?>
    </div>
</body>

<?php get_footer(); ?>
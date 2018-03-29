<?php get_header(); ?>
    <div class="layoutSingleColumn">
        <div class="u-backgroundColorWhite">
        <?php while ( have_posts() ) : the_post();?>
            <article class="u-paddingTop50" itemscope="itemscope" itemtype="http://schema.org/Article">
                <header class="entry-header">
                    <?php the_title( '<h2 class="entry-title">', '</h2>' );?>
                </header>
                <div class="grap">
                    <?php the_content();?>
                </div>
            </article>
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        <?php endwhile; ?>
    </div>
    </div>
<?php get_footer(); ?>
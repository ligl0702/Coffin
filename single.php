<?php get_header();?>
<?php while ( have_posts() ) : the_post();?>
    <div class="layoutSingleColumn">
        <article class="u-paddingTop50">
            <header class="entry-header">
                <div class="entry-meta">
                    <?php echo get_the_date('m d, Y');?></time><span class="middotDivider"></span><?php the_category(',')?>
                </div>
                <?php the_title( '<h2 class="entry-title">', '</h2>' );?>
            </header>
            <div class="grap">
                <?php the_content();?>
            </div>
            <?php echo get_the_tag_list('<div class="tag-list">','','</div>');?>
            <div class="narrot-card">
                <div class="narrot-card-imageWrapper">
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') )?>"><?php echo get_avatar(get_the_author_meta( 'ID'),64);?></a>
                </div>
                <div class="narrot-card-content"><?php the_author();?></div>
                <div class="narrot-card-description">
                    <p><?php the_author_description();?></p>
                </div>
            </div>
        </article>
    </div>
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
<?php endwhile; ?>
<?php get_footer(); ?>
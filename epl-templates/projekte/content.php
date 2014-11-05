<!-- content.php -->
<div>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail( array( 100, 100 ), array( 'class' => 'alignleft', 'style' => 'margin: 5px; padding: 5px;' ) ); ?>
    </a>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>

    <?php the_excerpt(); ?><br>
</div>

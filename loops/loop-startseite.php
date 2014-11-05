<?php
/**
 * Created by PhpStorm.
 * User: staude
 * Date: 18.10.14
 * Time: 22:40
 */
 if( have_posts() ) : $i = 0; ?>

    <div class="">
        <?php while( have_posts() ): the_post(); $i++ ?>
            <article <?php post_class(array('grid-post')) ?>>

                <?php if( has_post_thumbnail() ) : ?>
                    <a class="nngrid-thumbnail" href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail( array(121, 90) ); ?>
                    </a>
                <?php endif; ?>

                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                <div class="excerpt"><?php //the_excerpt() ?></div>
            </article>
            <?php if($i % 3 == 0) : ?><div class="clear"></div><?php endif; ?>
        <?php endwhile; ?>
    </div>


<?php endif; ?>
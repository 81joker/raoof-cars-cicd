<?php
/**
 * index.php
 *
 * Fallback template — used when no other template matches.
 */

get_header();
?>

<section class="section section--cream">
    <div class="container--narrow">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

                    <h2 class="section-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="entry-excerpt lead">
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn btn--primary" style="margin-top: 1rem;">
                        <?php esc_html_e( 'Read More', 'raoof-cars' ); ?>
                    </a>

                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <p><?php esc_html_e( 'No content found.', 'raoof-cars' ); ?></p>

        <?php endif; ?>

    </div>
</section>

<?php get_footer();

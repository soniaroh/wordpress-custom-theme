<?php get_header(); ?>

<main>

    <section class="hero">
        <div class="container">
            <h1>Simple. Modern. Useful.</h1>

            <p>
                A custom WordPress website built with a responsive
                frontend and reusable components.
            </p>

            <a href="#latest-posts" class="button">
                Explore
            </a>
        </div>
    </section>


    <section id="latest-posts" class="posts">
        <div class="container">

            <h2>Latest Posts</h2>

            <div class="post-grid">

                <?php
                $latest_posts = new WP_Query([
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                ]);
                ?>

                <?php if ($latest_posts->have_posts()) : ?>

                    <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>

                        <article class="post-card">

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            <?php endif; ?>

                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p>
                                <?php echo esc_html(get_the_excerpt()); ?>
                            </p>

                        </article>

                    <?php endwhile; ?>

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>

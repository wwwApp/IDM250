<?php
get_header(); ?>

<main class="main">
    <h1 class="result-title">
        Archive for
        <i><?php echo get_the_archive_title(); ?></i>
    </h1>

    <!-- Archive Result -->
    <div class="work search-result">
        <?php if (have_posts()) : ?>
            <ul class="work__list">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="work__item">
                        <a class="work__item__link" href="<?php the_permalink(); ?>">
                            <?php the_title()?> 
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <?php else : ?>
                <p style="text-align: center; font-size: 2rem;">Sorry, No Post Found</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
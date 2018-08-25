<?php

/*
Template Name: General
*/

get_header(); ?>

<main class="main">
        <!-- General elements -->
        <div class="loop">
                <div class="loop__bracket-left">[</div>
            <div class="loop__container">
                <ul class="loop__container__list">
                    <li class="loop__container__list__item">General</li>
                    <li class="loop__container__list__item">Styles</li>
                    <li class="loop__container__list__item">General</li>
                    <li class="loop__container__list__item">Styles</li>
                </ul>
            </div>
            <div class="loop__bracket-right">]</div>
        </div>

        <div class="work-detail general">
            <?php if (have_posts()): ?>
                <?php // TO SHOW THE PAGE CONTENTS?>
                <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
                <?php endwhile; //resetting the page loop?>
                <?php wp_reset_query(); //resetting the page query?>
            <?php else: ?>
                <div class="general">
                    <h4 style="text-align: center">Sorry, No Post Found</h4>
                </div>
            <?php endif; ?>
        </div>
</main>

<?php get_footer(); ?>
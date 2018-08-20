<?php
/*
Template Name: About
*/
get_header(); ?>

    <main class="main">
        <!-- Introduction -->
        <div class="loop">
                <div class="loop__bracket-left">[</div>
            <div class="loop__container">
                <ul class="loop__container__list">
                    <li class="loop__container__list__item">My name is Woo</li>
                    <li class="loop__container__list__item">송우영입니다</li>
                    <li class="loop__container__list__item">ソンウヨンです</li>
                    <li class="loop__container__list__item">我叫宋宇英</li>
                </ul>
            </div>
            <div class="loop__bracket-right">]</div>
        </div>

        <div class="intro">
        <?php if (have_posts()): ?>
                    <?php // TO SHOW THE PAGE CONTENTS?>
                    <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                        <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
                    <?php endwhile; //resetting the page loop?>
                    <?php wp_reset_query(); //resetting the page query?>
                <?php else: ?>
                    <p>Sorry, No Post Found</p>
                <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>

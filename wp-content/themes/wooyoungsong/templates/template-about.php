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
                    <!-- Rolling text contents generated from CMS -->
                    <?php $texts = explode("<br />", get_field('text_list')); ?>
                    <?php foreach($texts as $text): ?>
                        <li class="loop__container__list__item"><?php echo $text; ?></li>
                    <?php endforeach; ?>
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
                <h4 style="text-align: center">Sorry, No Post Found</h4>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>

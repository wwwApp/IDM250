<?php
get_header(); ?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <h1>
        <?php echo get_the_archive_title(); ?>
    </h1>

    Archives by Month
    <ul>
        <?php
            $arg = [
                'type' => 'monthly'
            ];
            wp_get_archives($arg);
        ?>
    </ul>

    Archives by Year
    <ul>
        <?php
            $arg = [
                'type' => 'yearly'
            ];
            wp_get_archives($arg);
        ?>
    </ul>

    <hr>

    <?php if (have_posts()): ?>
        <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_title(); ?>
                <?php the_excerpt(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        </article>
        <?php else: ?>
        <h2>Sorry, No Post Found</h2>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

<?php

/*
Template Name: Sidebar
*/

get_header(); ?>

    <main class="main main-sidebar">
        <!-- Work Detail -->
        <div class="work-detail">
            <div class="loop loop-sidebar">
                <div class="loop__bracket-left">[</div>
                <div class="loop__container loop-sidebar__container">
                    <ul class="loop__container__list">
                        <li class="loop__container__list__item"><?php the_title(); ?></li>

                        <?php
                            // Get categories associated with this post
                            $categories = get_the_category();
                        ?>
                        <?php foreach($categories as $category): ?>
                            <li class="loop__container__list__item"><?php echo $category->name ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="loop__bracket-right">]</div>
            </div>

            <div class="work-detail__desc">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <?php the_content(); 
                    endwhile; else: ?>
                    <h2>Sorry, No Post Found</h2>

                    <!-- 
                    <div class="work-detail__image">
                    </div>
                    -->
                
                <?php endif; ?> 
            </div>
        </div> 

        <!-- Sidebar -->
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </main>

<?php get_footer(); ?>

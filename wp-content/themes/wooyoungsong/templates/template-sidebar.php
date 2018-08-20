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
                        <li class="loop__container__list__item">Papermill</li>
                        <li class="loop__container__list__item">Food Truck</li>
                        <li class="loop__container__list__item">Mobile App</li>
                        <li class="loop__container__list__item">UI/UX Design</li>
                    </ul>
                </div>
                <div class="loop__bracket-right">]</div>
            </div>
            <div class="work-detail__desc">
                Papermill is an Austrailia originated food truck at Drexel University. Our team and I worked together to design an app that
                will facilitate mobile ordering process that can be done pleasantly and efficiently by the truck's target
                audience. Our process included series of iterative UX process including interviews, testing, and data analysis.
            </div>
            <div class="work-detail__image">
                <img src="<?php echo get_template_directory_uri();?>/dist/imgs/papermill/splash.png" alt="Papermill Screenshot">
                <img src="<?php echo get_template_directory_uri();?>/dist/imgs/papermill/menu2.png" alt="Papermill Screenshot">
                <img src="<?php echo get_template_directory_uri();?>/dist/imgs/papermill/menu.png" alt="Papermill Screenshot">
                <img src="<?php echo get_template_directory_uri();?>/dist/imgs/papermill/order.png" alt="Papermill Screenshot">
            </div>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </main>

<?php get_footer(); ?>

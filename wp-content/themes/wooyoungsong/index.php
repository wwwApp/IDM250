<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<main class="main">
        <!-- Greeting -->
        <div class="loop">
            <div class="loop__bracket-left">[</div>
            <div class="loop__container">
                <ul class="loop__container__list">
                    <li class="loop__container__list__item">Hello!</li>
                    <li class="loop__container__list__item">안녕하세요!</li>
                    <li class="loop__container__list__item">こんにちは!</li>
                    <li class="loop__container__list__item">你好!</li>
                </ul>
            </div>
            <div class="loop__bracket-right">]</div>
        </div>

</main>

<?php get_footer(); ?>
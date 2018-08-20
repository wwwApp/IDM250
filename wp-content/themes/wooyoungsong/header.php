<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wooyoung Song</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Wordpress Header Code -->
    <?php wp_head(); ?>
    <!-- Close Wordpress Header Code -->
</head>

<body <?php body_class('single');?>>
    <!-- Introduction and Navigation -->
    <header class="header">
            <a class="logo" href="<?php echo home_url(); ?>">woosong</a>
            
            <div class="menu">
                <a class="menu__link">
                    <span class="menu__title">menu</span>
                    <div class="menu__hamb">
                        <span class="menu__hamb-1"></span>
                        <span class="menu__hamb-2"></span>
                    </div>
                </a>

                <nav class="nav">

                <?php 
                    wp_nav_menu([
                        'theme_location'  => 'main',
                        'container'       => 'ul',
                        'menu_class'      => 'nav__list',
                    ]);
                ?>
                <!--
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__item-link" href="about.html">about</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__item-link" href="archive.html">projects</a>
                        </li>
                    </ul>
                    -->
                </nav>
            </div>
    </header>
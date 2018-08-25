<?php 
get_header(); ?>

<main class="main">
        <!-- Greeting -->
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
</main>

<?php get_footer(); ?>
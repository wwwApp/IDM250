<?php
/*
Template Name: Archive
*/

$arg = [
    'post_type'     => 'post',
    'post_status'   => 'publish'
  ];
$posts = new WP_Query($arg);

get_header(); ?>

<main class="main">

        <div class="search" tabindex="0">
            <svg class="search-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 250.313 250.313" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">
                <g id="Search">
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
                                    c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
                                    c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
                                    c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
                                    c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
                                    C170.146,140.044,140.043,170.146,102.911,170.146z" />
                </g>
            </svg>
            <input class="search-bar" type="text" placeholder="search">
            <div class="search-border"></div>
        </div>

        <div class="work search-result">
            <ul class="work__list">
                <?php if ($posts->have_posts()) : ?>
                    <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                        <li class="work__item">
                            <a class="work__item__link" href="<?php the_permalink(); ?>">
                                <?php the_title()?> 
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>
                            <?php echo 'Sorry, no posts matched your criteria.'; ?>
                        </p>
                <?php endif; ?>
            </ul>
        </div>
    </main>

<?php get_footer(); ?>
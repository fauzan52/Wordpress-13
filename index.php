<?php get_header();  ?>
<body>
<main>
<!--TYPE ONE CARD-->
<div class="card">
    <div class="card-body text-center">
        <?php the_post_thumbnail('small_thumbnail'); ?>
        <div class="card-title">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
    </div>
</div>
<br>

<!--TYPE TWO CARD-->
    <div class="row">
<div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
    </div>
<br>
<!--TYPE THREE CARD-->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<br>
<!--    <nav aria-label="...">-->
<!--        <ul class="pagination">-->
<!--            <li class="page-item disabled">-->
<!--                <a class="page-link">Previous</a>-->
<!--            </li>-->
<!--            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--            <li class="page-item active" aria-current="page">-->
<!--                <a class="page-link" href="#">2</a>-->
<!--            </li>-->
<!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="#">Next</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </nav>-->
<div class="text-center">
<?php fauzan_pagination(); ?>
</div>

<br>
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>

<!--WP Query-->
<!--<div id="custom_post">-->
<!--    <h1>Post Terakhir : </h1>-->
<?php
//    $custom_post = new WP_Query('cat=7');
//
//    if   ($custom_post -> have_posts()):
//        while ($custom_post->have_posts()): $custom_post->the_post(); ?>
<!--        <a href="--><?php //the_permalink(); ?><!--"> --><?php //the_title(); ?><!--</a>-->
<!--    --><?php
//    endwhile;
//    else:
//        echo 'Tidak ada postingan';
//    endif;
//?>
<!--</div>-->

</body>
<div class="col-md-12">
    <div class="container latest-post">
        <div class="row">
            <?php $args = array( 'post_type' => 'post' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $image = get_the_post_thumbnail_url();
            ?>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="post-block">
                    <div class="img-post">
                        <img src="<?php echo $image; ?>">
                    </div>
                    <div class="content-post">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

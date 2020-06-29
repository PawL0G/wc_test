<div class="col-md-12 pt-*-5 bg-home">
    <div class="container services">
        <div class="row">

            <h1 class="service-heading"><?php the_field('section_title_1', 'getha'); ?></h1>

            <?php $args = array( 'post_type' => 'services' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                $image = get_field('service_icon');
                ?>

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="service-block">
                        <div class="img-service">
                            <img src="<?php echo $image; ?>">
                        </div>
                        <div class="content-services">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('service_description'); ?></p>
                            <div class="widget-container">
                                <?php
                                $link = get_field('service_cpa_link');
                                $link_title = get_field('service_cpa_title');
                                if( $link || $link_title): ?>
                                    <a href="<?php echo esc_url( $link ); ?>"><span class="button-page-buy"><?php echo $link_title ?></span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

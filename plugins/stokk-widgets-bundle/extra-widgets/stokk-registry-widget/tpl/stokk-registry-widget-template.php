<!-- section registry --> 
<section class="air-block bg-metallics pt-0 pb-0 background-metallics" id="registry">
    <div class="container">

        <?php 
        if( ! empty( $images ) ) : 
        ?>
        <div class="row d-flex align-items-center text-center text-lg-left pb-5">
            <div class="col-12 col-lg-2 m-auto m-md-0">
                <div class="lead ">
                    <div class="font-two text-h2 mb-0 pb-0 text-color-secondary"><?php echo esc_attr($title); ?></div>
                    <div class="h3  text-color-primary"><?php echo esc_attr($subtitle); ?></div>
                </div>
            </div>
        <?php 
                foreach( $images as $image ) : ?>
                    <div class="col-12 col-lg-2 col-md-3 ml-auto">
                        <a href="<?php echo $image['url']?>" <?php echo $target = $image['new_window'] ? 'target="_blank"' : ''; ?> >
                                <?php echo ' <img alt="image" class="img-fluid align-middle pt-5 pt-md-0" '.wp_get_attachment_image($image['image'], 'full', false, array('label' => $image['label']) ).'';?>
                            </a>
                    </div>
            <?php  
                endforeach; ?>
        </div>
        <?php endif; ?>
        
        <div class="row pt-5">
            <div class="col">
                <div class="text-center bg-white p-5">
                            <?php 
                            $image_icon = $testimonial['logo'][0] ? $testimonial['logo'][0] : get_template_directory_uri().'/assets/images/wedding/quote.png';
                            echo '<img alt="image" class="img-fluid" src="'.$image_icon.'" style="margin-top:-110px;">';
                            ?>
                    <p><?php echo $testimonial['desc']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
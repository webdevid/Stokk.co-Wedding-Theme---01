<!-- section RSVP -->
<?php 
$background_image = $background_image['rsvp_background'];
$background_image = !empty($background_image) ? $background_image : get_template_directory_uri().'/assets/images/wedding/bg-rsvp.jpg';
?>
<section class="air-block section rsvp background-metallics" id="rsvp">
    <div class="container">
        <div class="col-12">
            <div class="rsvp-wrapper" style="background-image:url('<?php echo $background_image;?>');">
                <!-- rsvp card -->
                <div class="rsvp-inner">
                    <div class="rsvp-card float-lg-left">
                        <div class="rsvp-badge">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/wedding/love.svg">
                        </div>
                        <small class="font-two text-h3 text-color-secondary"><?php echo esc_html($rsvp_left['rsvp_subtitle']); ?></small>
                        <h3 class="text-color-primary mb-lg-4"><?php echo esc_html($rsvp_left['rsvp_title']); ?></h3>
                        <p><?php echo esc_html($rsvp_left['rsvp_content']); ?></p>

                        <ul class="list-unstyled">
                            <?php if($rsvp_left['event']){ 
                                foreach($rsvp_left['event'] as $e_left):
                                ?>
                                    <li class="media mb-3">
                                        <img class="mr-3 pt-1" src="<?php echo get_template_directory_uri();?>/assets/images/wedding/building.svg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($e_left['event_title']);?></div>
                                            <div class="text-h5 "><?php echo esc_html($e_left['event_desc']);?></div>
                                        </div>
                                    </li>
                            <?php 
                                endforeach;
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="rsvp-card float-lg-right">
                        <div class="rsvp-badge">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/wedding/cake.svg">
                        </div>
                        <small class="font-two text-h3 text-color-secondary"><?php echo esc_html($rsvp_right['rsvp_subtitle']); ?></small>
                        <h3 class="text-color-primary mb-lg-4"><?php echo esc_html($rsvp_right['rsvp_title']); ?></h3>
                        <p><?php echo esc_html($rsvp_right['rsvp_content']); ?></p>

                        <ul class="list-unstyled">
                            <?php if($rsvp_right['event']){ 
                                foreach($rsvp_right['event'] as $e_right):
                                ?>
                                    <li class="media mb-3">
                                        <img class="mr-3 pt-1" src="<?php echo get_template_directory_uri();?>/assets/images/wedding/building.svg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($e_right['event_title']);?></div>
                                            <div class="text-h5 "><?php echo esc_html($e_right['event_desc']);?></div>
                                        </div>
                                    </li>
                            <?php 
                                endforeach;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- rsvp form --> 
                <div class="rsvp-form">
                    <form>
                        <div class="form-row">
                            </div>
                            <div class="col-lg-3 mx-auto" >
                            <a href="<?php echo esc_url($button_link['link']); ?>"> <button type="button" class="btn btn-rsvp"><?php echo esc_html($button_link['caption']); ?></button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
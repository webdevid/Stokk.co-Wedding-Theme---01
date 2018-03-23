<!-- section friend-collage -->
<section id="tab-friend" class="tab-friend air-block pt-0 background-metallics">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav  col-lg-8 mx-auto justify-content-center text-center mb-5">
                    <?php if(!empty($brides['nav_title'])){ ?>
                    <li class="nav-item">
                        <a class="nav-tab active" id="brides-tab" data-toggle="pill" href="#tab-brides" aria-selected="true"><?php echo esc_html($brides['nav_title']); ?></a>
                    </li>
                    <?php } ?>
                    <?php if(!empty($friends['nav_title'])){ ?>
                    <li class="nav-item">
                        <a class="nav-tab font-two text-color-secondary" id="brides-tab" data-toggle="pill" href="#tab-friends" aria-selected="true"><?php echo esc_html($friends['nav_title']); ?></small>
                    </li> 
                    <?php } ?>
                    <?php if(!empty($grooms['nav_title'])){ ?>
                    <li class="nav-item">
                        <a class="nav-tab" id="grooms-tab" data-toggle="pill" href="#tab-grooms" aria-selected="false"><?php echo esc_html($grooms['nav_title']); ?></a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="tab-content text-center" id="pills-tabContent">
                    <?php if($brides['list']){ ?>
                    <div class="tab-pane fade show active" id="tab-brides">
                        <div class="card-deck">
                            <?php 
                                foreach($brides['list'] as $bl){
                            ?>
                            <div class="card">
                                <div class="card-image"> 
                                <?php 
                                
                                    $image = !empty($bl['image']) ? wp_get_attachment_image_src($bl['image'],'medium')[0] : get_template_directory_uri().'/assets/images/wedding/brides-01.jpg';
                                    echo '<img class="card-img-top" src="'.$image.'" alt="Card image cap">';
                                    
                                ?>
                                <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($bl['fb_link']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($bl['tw_link']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($bl['ig_link']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($bl['name']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($bl['status']); ?></p>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($friends['list']){ ?>
                    <div class="tab-pane fade show" id="tab-friends">
                        <div class="card-deck">
                            <?php 
                                foreach($friends['list'] as $fl){
                            ?>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                
                                    $image = !empty($fl['image']) ? wp_get_attachment_image_src($fl['image'],'medium')[0] : get_template_directory_uri().'/assets/images/wedding/brides-01.jpg';
                                    echo '<img class="card-img-top" src="'.$image.'" alt="Card image cap">';
                                    
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($fl['fb_link']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($fl['tw_link']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($fl['ig_link']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($fl['name']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($fl['status']); ?></p>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if($grooms['list']){ ?>
                    <div class="tab-pane fade" id="tab-grooms">
                        <div class="card-deck">
                            <?php 
                                foreach($grooms['list'] as $gl){
                            ?>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                
                                    $image = !empty($gl['image']) ? wp_get_attachment_image_src($gl['image'],'medium')[0] : get_template_directory_uri().'/assets/images/wedding/brides-01.jpg';
                                    echo '<img class="card-img-top" src="'.$image.'" alt="Card image cap">';
                                    
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($gl['fb_link']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($gl['tw_link']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($gl['ig_link']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($gl['name']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($gl['status']); ?></p>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_header(); 
?>
<style>
    .wooGroup-section-1{
        background-image: url('<?= get_field("background_Introduce") ?>');
    }
</style>
    <div id="wooGroup" class="wooGroup">
        <div class="swiper mySwiper">
        <div
            class="parallax-bg"
            style="background-image:url('<?= get_template_directory_uri().'/assets/images/OpenGraphImage.png' ?>')"
            data-swiper-parallax="-300%"
        ></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-name="Woo">
                    <div class="wooGroup-section-1">
                        <div class="container">
                            <h1 class="title-box">
                                <span class="text text1">W</span>
                                <span class="text text2">O</span>
                                <span class="text text3">O</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-name="Woo">
                    <div class="wooGroup-section-1">
                        <div class="container">
                            <div class="content-box">
                                <?= get_field('introduce_description'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(have_rows('section_service_list')){
                        while (have_rows('section_service_list')) : the_row();
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $description = get_sub_field('description');
                ?>
                        <div class="swiper-slide wooGroup-section-2 wooGroup-section-2b" data-name="<?= $title ?>">
                            <div class="wooGroup-section-box">
                                <div class="wooGroup-section-boxLeft">
                                    <img src="<?= $image ?>" alt="">
                                </div>
                                <div class="wooGroup-section-boxRight">
                                    <h2 class="title-box">
                                        <span>
                                            <?= $title ?>
                                        </span>
                                    </h2>
                                    <div class="content-box">
                                        <?= $description ?>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                <?php
                        endwhile;
                    }
                ?>
                
                <div class="swiper-slide" data-name="<?= get_field('title_footer','option') ?>">
                    <div class="wooGroup-section-3">
                        <div class="container">
                            <p class="content-box">
                                <a href="tel:<?= get_field('phone','option')?>" class="phone"> +<?= get_field('phone','option')?></a></br>
                                <a href="mailto:<?= get_field('email','option')?>" class="email"><?= get_field('email','option') ?></a></br>
                                <span class="address"><?= get_field('adress','option') ?></span>
                            </p>
                            <h2 class="title-box"><?= get_field('title_footer','option') ?></h2>
                        </div>
                        <div class="footer">
                            <div class="container">
                                <div class="footer-box">
                                    <div class="footer-boxLeft">
                                        <a href="<?= get_field('url_logo','option') ?>"><img src="<?= get_field('logo','option') ?>" alt=""></a>
                                    </div>
                                    <div class="footer-boxRight">
                                        <a href="<?= get_field('link_bottom_footer','option') ?>"><?= get_field('text_link','option') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
<?php
get_footer(); 
?>

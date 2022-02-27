<?php
get_header(); 
?>
    <div id="privacyPolicy" class="wooGroup privacyPolicy" >
                    <div class="wooGroup-sectionPrivacyPolicy">
                        <div class="container">
                            <div class="logo">
                                <a href="/"><img src="<?= get_field('logo_privacy_policy') ?>" alt="logo"></a>
                            </div>
                            <div class="content-boxPrivacyPolicy">
                                <h1 
                                class="title-box"
                                data-aos="zoom-in"
                                data-aos-delay="2000"
                                data-aos-easing="ease-in-sine"
                                ><?= get_field('title_privacy_policy') ?></h1>
                                <div class="list-content">
                                <?php if(have_rows('content_privacy_policy')){
                                        while (have_rows('content_privacy_policy')) : the_row();
                                        $content = get_sub_field('content');
                                ?>
                                    <div 
                                    class="item"
                                    data-aos="fade-right"
                                    data-aos-delay="1000"
                                    data-aos-easing="ease-in-sine"
                                    >
                                        <?= $content ?>
                                    </div>
                                    <?php
                                        endwhile;
                                    }
                                ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
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
    
<?php
get_footer(); 
?>
<script>
        $(document).ready(function($){
            $width = $(window).width();
            if ($width > 1200) {
                $('.wooGroup-section-3').mouseenter(function(){
                    $(this).addClass('showSection');
                });
                $('.wooGroup-section-3').mouseleave(function(){
                    $('.wooGroup-section-3.showSection').removeClass('showSection');
                });
            }
            
        })
    </script>
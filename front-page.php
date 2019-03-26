<?php
/**
 * Template name: Front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reevai
 */

get_header(); ?>
 <div class="jumbotron">
     <div class="container">
         <div class="row">
            <?php if (have_rows('jumbotron')): ?>
                <?php while (have_rows('jumbotron')): the_row();
                        $content = get_sub_field('content');
                        $btn = get_sub_field('button');
                    ?>
                     <div class="jumbotron_info" data-aos="fade-right">
                         <?php echo $content; ?>
                         <?php if ($btn) {
                            echo '<a href="javascript:void(0)" class="btn contact-btn" data-aos="fade-bottom" data-aos-delay="400">'. $btn .'</a>';
                         } ?>
                     </div>
                <?php endwhile; ?>
            <?php endif; ?>

             <div class="reference_gallery" id="references">
                 <?php
                 $i = 0;
                  $argss = array(
                          'post_type' => 'referencie',
                          'posts_per_page' => -1,
                         );
                  $the_query = new WP_Query( $argss );
                  if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                        $thumb_img = get_the_post_thumbnail_url(get_the_ID(),'large');
                        $ref_full_img = get_field('full_page_img');
                        $ref_url = get_field('reference_url');
                    ?>
                    <div class="gallery-item-wrapper">
                        <div class="gallery-item">
                            <a href="javascript:void(0)">
                                <img src="<?php echo $thumb_img ?>" alt="">
                            </a>
                        </div>
                          <?php if ($ref_full_img) { ?>
                                <div class="gallery-popup" style="display: none;">
                                    <div class="popup">
                                        <h2><?php the_title() ?></h2>
                                        <a href="javascript:void(0)" class="close-popup"></a>
                                        <div class="reference-preview">
                                            <img src="<?php echo $ref_full_img ?>" alt="">
                                        </div>
                                        <?php if ($ref_url) {
                                            echo '<a href="'. $ref_url .'" class="reference-url btn_underline" target="_blank">'. __('Navštíviť webstránku') .'</a>';
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php endwhile; endif;
                     wp_reset_query();
                    ?>
             </div>
             <div class="center"><a href="" class="btn_underline load-more"><?php _e('Zobraziť viac', 'reevai') ?></a></div>
         </div>
     </div>
 </div>

<section id="about_us">
    <div class="container">
        <div class="row">

            <div class="col-lg-5" data-aos="fade-right">
                <div class="animated-img">
                    <?php include("images/process3.svg"); ?>
                </div>
            </div>
            <?php if (have_rows('about_us')): ?>
                <?php while (have_rows('about_us')): the_row(); ?>
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="content-box">
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php if (have_rows('process')):
    $i = 0;
?>
<section id="working_process">
    <div class="container">
        <h1 data-aos="fade-left"><?php _e('Ako to u nás funguje?', 'reevai') ?></h1>
        <div class="row">
            <?php while (have_rows('process')): the_row();
                $title = get_sub_field('header');
                $content = get_sub_field('content');
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="<?php $i++; echo $i; ?>00">
                <div class="current_process">
                    <span class="numbering">0<?php echo $i; ?></span>
                    <?php if ($title) { ?>
                        <strong class="title"><?php echo $title; ?></strong>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <p><?php echo $content; ?></p>
                    <?php } ?>

                </div>
            </div>
        <?php endwhile; ?>
        <?php if (have_rows('contact_us')): ?>
            <?php while (have_rows('contact_us')): the_row();
                $content = get_sub_field('content');
                $btn = get_sub_field('button');
            ?>
                <div class="price_offer" data-aos="fade-top">
                    <?php echo $content; ?>
                    <?php if ($btn) { ?>
                        <a href="javascript:void(0)" class="btn contact-btn"><?php echo $btn; ?></a>
                    <?php } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<section id="solutions">
    <div class="container">
        <div class="row">

            <div class="col-lg-5" data-aos="fade-right">
                <?php include("images/css-img.svg"); ?>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="content-box">
                    <?php the_field('solutions'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();

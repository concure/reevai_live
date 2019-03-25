<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reevai
 */

?>
<footer id="footer" class="site-footer" data-aos="fade-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                <h1><?php _e('Mám záujem o cenovú ponuku', 'reevai') ?></h1>
                <?php the_field('contact_form', 'options'); ?>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <?php
                    $email = get_field('email', 'options');
                    $phone = get_field('phone', 'options');
                    $company = get_field('company', 'options');
                    $adress = get_field('adress', 'options');
                    $gdpr = get_field('gdpr_link', 'options');
                ?>
                <strong><?php _e('Kontakné údaje', 'reevai') ?></strong>
                <?php if ($email) {
                    echo '<a href="mailto:'. $email .'">'. $email .'</a>';
                } ?>
                <?php if ($phone) {
                    echo '<a href="mailto:'. $phone .'">'. $phone .'</a>';
                } ?>
                <?php if ($company) {
                    echo '<span>'. $company .'</span>';
                } ?>
                <?php if ($adress) {
                    echo '<span>'. $adress .'</span>';
                } ?>
                <?php if ($phone) {
                    echo '<a href="'. $gdpr .'" target="_blank">'. __('Vyhlásenie o ochrane osobných údajov', 'reevai') .'</a>';
                } ?>

                <strong><?php _e('Sledujte nás', 'reevai') ?></strong>
                <div class="social-sites">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt=""></a>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright">
                <span>Všetky práva vyhradené © 2019 Reevai
                </span>
    </div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136849745-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136849745-1');
</script>


<?php wp_footer(); ?>
</script>
</body>
</html>

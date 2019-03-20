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
<footer id="footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Mám záujem o cennovú ponuku</h1>
                <form action="/#wpcf7-f4-o1" method="post" class="wpcf7-form invalid" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="4">
                        <input type="hidden" name="_wpcf7_version" value="5.1.1">
                        <input type="hidden" name="_wpcf7_locale" value="sk_SK">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="g-recaptcha-response" value="">
                    </div>
                    <p><span class="wpcf7-form-control-wrap meno"><input type="text" name="meno" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-not-valid" aria-required="true" aria-invalid="true" placeholder="Meno a priezvisko">
                        <span class="wpcf7-form-control-wrap email"><input type="text" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Email"></span>
                        <span class="wpcf7-form-control-wrap telefon"><input type="tel" name="telefon" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel wpcf7-not-valid" aria-required="true" aria-invalid="true" placeholder="Telefón">
                        <span class="wpcf7-form-control-wrap predmet"><input type="text" name="predmet" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Predmet"></span>
                        <span class="wpcf7-form-control-wrap textarea-542"><textarea name="textarea-542" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Správa"></textarea></span>
                        <input type="submit" value="Odošli" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
            </div>

            <div class="col-lg-6">
                <strong>Kontakné údaju</strong>
                <a href="">info@reevai.com</a>
                <a href="">+421 948 548 458</a>
                <span>Varsum, s.r.o.</span>
                <span>925 71 Trnovec nad Váhom 67</span>
                <a href="">Vyhlásenie o ochrane osobných údajov</a>

                <strong>Sledujte nás</strong>
                <div class="social-sites">
                    <a href=""><img src="/wp-content/themes/reevai_live/images/fb.png" alt=""></a>
                    <a href=""><img src="/wp-content/themes/reevai_live/images/instagram.png" alt=""></a>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright">
                <span>Všetky práva vyhradené © 2019 Reevai
                </span>
    </div>
</footer>

<?php wp_footer(); ?>
</script>
</body>
</html>

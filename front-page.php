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
             <div class="jumbotron_info">
                 <h1>Komplexné riešenie webov podľa vaších predstáv.</h1>
                 <span>Zameriavame sa na tvorbu webstránok ktoré vám pomôžu v budovaní a rozvoja vášho biznisu alebo osobné rastu.</span>
                 <a href="" class="btn">Mám záujem o cenovu ponuku</a>
             </div>

             <div class="reference_gallery">
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup.png" alt=""></a></div>
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup2.png" alt=""></a></div>
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup3.png" alt=""></a></div>
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup4.png" alt=""></a></div>
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup6.png" alt=""></a></div>
                 <div class="gallery-item"><a href="" ><img src="<?php echo get_template_directory_uri(); ?>/images/mockup5.png" alt=""></a></div>
             </div>
             <div class="center"><a href="" class="btn_underline">Zobraziť viac</a></div>
         </div>
     </div>
 </div>

<section id="about_us">
    <div class="container">
        <div class="row">

            <div class="col-lg-5">
                <div class="animated-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/process3.svg" alt="">

                </div>
            </div>

            <div class="col-lg-7">
                <div class="content-box">
                    <h1>O našej tvorbe</h1>
                    <strong>Radi tvoríme zmysluplné produkty. Taktiež nás poteší keď nájdeme jednoduché a učinné riešenie pre váš produkt. </strong>
                    <p>Či už zlepšujeme existujúcu myšlienku alebo prianášame novú do života.  V každom kroku sa zameriavame na proces ktorým tvoríme webstránku pre zakazníka a to tým že spolupracujeme s našimi klientmi na vytvaraní vzájomne prospešných vzťahov.
                    Naš prístup k zakazníkom a vývoju projektov nám umožnuje realizovať myšlienky od konceptu až po spustenie, aj mimo neho.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="working_process">
    <div class="container">
        <h1>Ako to u nás funguje</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="current_process">
                    <span class="numbering">01</span>
                    <strong class="title">Prvé stretnutie</strong>
                    <p>Prejdeme si s vami váš projekt a spolu najdeme tie najlepšie možné riešenia. Rozoberieme si
                        štruktúru projektu. Podelíme sa o skúsenosti,
                        informácie a novinky v tvorbe webstránok</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="current_process">
                    <span class="numbering">02</span>
                    <strong class="title">Návrh na mieru</strong>
                    <p>Vytvoríme pre vás jedinečný dizajn ktorý bude blizky vám a hlavne osloví vaších potencionálných zakazníkov. Stránku vám nakódime s našími programátormi a ukázeme vám skúšobnú verziu</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="current_process">
                    <span class="numbering">03</span>
                    <strong class="title">Nasadenie webstránky</strong>
                    <p>Po ukončení skúšobnej verzie vám webstránku nasadíme na doménu s menom vašej spoločnosti. Následne spolu s vami všetko skontrolujeme či frčí ako má</p>
                </div>
            </div>

            <div class="price_offer">
                <strong>Ako získam cenovu ponuku ?</strong>
                <span>Najlepšie je osobné stretnutie kde si môžeme prejsť celý projekt.
               <br/> Ale taktiež nás možete kontaktovať telefonicky <a href="">+421 949 428 069</a> alebo na <a href="">info@reevai.com</a></span>
                <a href="" class="btn">Mám záujem o cenovu ponuku</a>
            </div>

        </div>
    </div>
</section>

<section id="solutions">
    <div class="container">
        <div class="row">

            <div class="col-lg-5">
                <?php include("images/css-img.svg"); ?>
            </div>

            <div class="col-lg-7">
                <div class="content-box">
                    <h1>Ponúkame riešenia ktoré vám pomôžu
                        s biznisom</h1>
                    <ul>
                        <li>- Moderný a reponzívny web</li>
                        <li>  - SEO optimalizácia</li>
                        <li>   - Web ktorý oslový potencionálných zakazníkov</li>
                        <li>  - Aktualizácia systému</li>
                        <li> - Kvalitný obsah</li>
                        <li> - Stabliná podpora</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();

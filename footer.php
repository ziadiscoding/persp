    <!-- </div> --><!-- fin div.content -->
    <?php
    if (get_the_ID() === 8) {
        echo do_shortcode('[contact-form-7 id="100" title="Formulaire de contact 1"]');
        ?>
        <script>
            const imgPath = '<?php bloginfo("template_directory"); ?>/assets/img/map.png';
            console.log(imgPath);
            document.getElementById('imgMap').src = imgPath;
        </script>
        <?php
    }
    ?>
    <footer>
        <div class="footer__content">
            <img src="<?= bloginfo('wpurl'); ?>/wp-content/uploads/2022/11/Logo-Marie-Aline-Gavand-blanc.png" alt="logo du site" class="footer__logo">
            <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
            <?php wp_nav_menu( array( 'menu' => 'footer1' ) ); ?>
            <?php wp_nav_menu( array( 'menu' => 'footer2' ) ); ?>
            <div class="footer__content__contact">
                <p>8 D rue Charles Tardy</p>
                <p>01000 Bourg-en-Bresse</p>
                <p>06 45 97 73 39</p>
                <p class="footer__content__contact__pSocial">
                    <a target="_blank" href="https://www.facebook.com/Lafabriquedeperspectives"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/FB_white.svg" alt="facebook"></a>
                    <a target="_blank" href="https://www.linkedin.com/in/marie-aline-gavand-geslin-5ab36055/"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/Linkn_white.svg" alt="linkedin"></a>
                    <a target="_blank" href="https://www.instagram.com/lafabriquedeperspectives/"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/insta_white.svg" alt="instagram"></a>
                    <a target="_blank" href="https://www.google.com/search?q=la+fabrique+des+perspectives&rlz=1C1VDKB_frFR1024FR1024&oq=la+&gs_lcrp=EgZjaHJvbWUqCAgAEEUYJxg7MggIABBFGCcYOzIGCAEQRRg8MgYIAhBFGDwyBggDEEUYPTIGCAQQRRg9MgYIBRBFGDwyBggGEEUYQTIGCAcQRRhB0gEIMTQyNWowajeoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x47e671bbfba66f01:0xa11bfbae3c5c457e,1,,,,"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/google_white.svg" alt="avis-google"></a>
                </p>
                <p class="footer__content__contact--btn"><a id="temoignage" siteurl="<?= bloginfo('wpurl'); ?>">Des témoignages</a></p>
            </div>
        </div>
        <p class="footer__bottom">
            <a href="https://www.yupanki.fr" class="menuCreate">Création du site internet : Yupanki</a> © 2022 Tous droits réservés | <a href="<?php bloginfo('wpurl'); ?>/mentions-legales/">Mentions légales</a> | <a href="<?php bloginfo('wpurl'); ?>/politique-de-confidentialite/">Politique de confidentialité</a>
        </p>
    </footer>
    <div id="sliderTemoignageDisplay">
        <img src="<?php bloginfo('template_directory'); ?>/assets/ico/material_close.svg" alt="" id="close">
        <ul id="sliderTemoignageDisplay__ul"></ul>
        <nav class="slider">
            <img src="<?php bloginfo('template_directory'); ?>/assets/ico/material_back.svg" alt="précédent" id="before">
            <img src="<?php bloginfo('template_directory'); ?>/assets/ico/material_forward.svg" alt="suivant" id="after">
        </nav>
    </div>
    <?php
    $args = array(
        'post_type' => 'temoignages',
        'posts_per_page' => -1,
        'orderby'   => array(
          'date' =>'DESC'
        )
    );
    $query = new WP_Query($args);
    if ($query->have_posts()): 
        echo '<ul class="sliderTemoignage" id="sliderTemoignage">';
        while ($query->have_posts()): $query->the_post();
                echo '<li>' . get_the_content() . '<p class="signature">' . get_the_title() . '</p><img alt="illustration témoignage" src="' . get_bloginfo('template_directory') . '/assets/img/temoignages.jpg"><p class="mention">Témoignages recueillis à l’issue de coachings ou de bilans de compétences. Les prénoms des personnes concernées ont été modifiés par souci de confidentialité.</p></li>';
        endwhile;
        echo '</ul>';
        wp_reset_postdata();
    endif;
    ?>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/nav.js"></script>
    <script type="module" src="<?php bloginfo('template_directory'); ?>/assets/scripts/temoignage.js"></script>
    <div id="certif"><script src="https://accesdenied.net/cdn/certif.js"></script><script>certif('lafabriquedeperspectives');</script></div>
</body>
</html>

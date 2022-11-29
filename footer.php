    <!-- </div> --><!-- fin div.content -->
    <footer>
        <div class="footer__content">
            <img src="<?= get_site_icon_url(); ?>" alt="logo du site" class="footer__logo">
            <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
            <div class="footer__content__contact">
                <p>8 D rue Charles Tardy</p>
                <p>01000 Bourg-en-Bresse</p>
                <p>06 45 97 73 39</p>
                <p class="footer__content__contact__pSocial">
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/FB_white.svg" alt="facebook"></a>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/Linkn_white.svg" alt="linkedin"></a>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/ico/insta_white.svg" alt="instagram"></a>
                </p>
                <p class="footer__content__contact--btn"><a href="<?php bloginfo('wpurl'); ?>/">Des témoignages</a></p>
            </div>
        </div>
        <p class="footer__bottom">
            Création : <a href="https://www.yupanki.fr">Yupanki</a> © 2022 Tous droits réservés | <a href="<?php bloginfo('wpurl'); ?>/mentions-legales/">Mentions légale</a>
        </p>
    </footer>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/nav.js"></script>
</body>
</html>
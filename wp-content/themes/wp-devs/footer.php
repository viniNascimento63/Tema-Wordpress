<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>
                <?php
                // Exibe dinamicamente o texto para copyright
                // definido pelo usuário.
                // Do contrário, um valor padrão (segundo parâmetro) 
                // será exibido.
                echo get_theme_mod('sett_copyright', 'Copyright X - All Rights Reserved');
                ?>
            </p>
        </div>
        <nav class="footer-menu">
            <!-- 
                        Exibe o menu de navegação registrado em
                        functions.php de slug 'wp_devs_footer_menu'.

                        'depth = 1' não permite submenus
                    -->
            <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu', 'depth' => 1)); ?>
        </nav>
    </div>
</footer>
</div>
<!-- 
        wp_footer() imprime os scripts 
        efileirados e/ou dados antes do
        fechamento da tag body.
    -->
<?php wp_footer(); ?>
</body>

</html>
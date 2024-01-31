<?php get_header();?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page not found 😢</h1>
                        <p>Unfortunately, the page you tried to reach does not exists on this site.</p>
                    </header>

                    <div class="error">
                        <!-- Caixa de pesquisa -->
                        <p>How about doing a search?</p>
                        <?php get_search_form();?>

                        <?php
                            // Widget que mostra os útimos posts e 
                            // no máximo 3.
                            the_widget( 'WP_Widget_Recent_Posts', 
                                array(
                                    'title' => 'Latest Posts',
                                    'number' => 3
                                ) 
                            );
                        ?>
                    </div>
                </div>
            </div>  
        </main> 
    </div>
</div>                
<?php get_footer();?>
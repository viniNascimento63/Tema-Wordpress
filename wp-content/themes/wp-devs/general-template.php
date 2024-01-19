<?php
/*
Template name: General Template
*/
?>
<?php get_header();?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="home-blog">
                <div class="container">
                    <div class="general-template">
                        <?php
                            if (have_posts()):
                                while(have_posts()) : the_post();
                                ?>
                                    <article>
                                        <h1><?php the_title();?></h1>
                                    </article>
                                <?php
                                endwhile;
                            else:
                                ?>
                                <p>Nothing yet to be displayed!</p>
                            <?php endif;
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer();?>
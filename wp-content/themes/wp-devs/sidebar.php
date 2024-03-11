<?php
// Verifica se existe uma sidebar ativa de id 'sidebar-blog'
if (is_active_sidebar('sidebar-blog')) :
?>
    <aside class="sidebar">
        <?php
        // Exibe uma sidebar dinamica.
        dynamic_sidebar('sidebar-blog');
        ?>
    </aside>
<?php endif;

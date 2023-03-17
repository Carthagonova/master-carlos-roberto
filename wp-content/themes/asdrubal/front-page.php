<?php
// include_once 'header.php';
get_header();
?>

<div class="generico">

    <h1>
        <?php the_title();?>
    </h1>

    <section id="contenido">
        <?php
        echo the_content();
        ?>
    </section>
    <?php
    include $plantillas .'trespost.php';
   // include 'plantillas/trespost.php';
    ?>

    <section>

    </section>
</div>


<?php
// include_once 'footer.php';
get_footer();
?>

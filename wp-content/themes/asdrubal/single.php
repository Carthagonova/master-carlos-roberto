<?php
// include_once 'header.php';
get_header();
?>

<div class="generico">

    <h1>
        <?php the_title();?>
    </h1>

    <style>
        img.aspectocoche {
            aspect-ratio: 3/2;
            object-fit: cover;
        }
        .infocoche {
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: center;
}
    </style>

    <section id="contenido">
    

        
        <?php
         if ( in_category('coches') ) {
          ?>

          <div class="infocoche">
              <img height="300px" class="aspectocoche" src="<?php the_field( 'imagencoche' ); ?>" />

        <table>
            <tr>
                <th></th>
                <th>Ficha Técnica</th>
            </tr>
            
            <tr>
                <th>Marca</th>
                <td><?php the_field( 'marca_coche' ); ?></td>
            </tr>
                <tr>
                <th>Modelo</th>
                <td><?php the_field( 'modelo_coche' ); ?></td>
                </tr>
            <tr>
                <th>CV</th>
                <td><?php the_field( 'CV' ); ?></td>
            </tr>

            <tr>
                <th>Precio</th>
                <td><?php the_field( 'precio' ); ?></td>
            </tr>

            <tr>
                <th>Combustible</th>
                <td><?php the_field( 'tipo_de_combustible' ); ?></td>
            </tr>

        </table>
         </div>
        <?php }  
         else {;}

        echo the_content();
        ?>
        
    </section>

</div>


<?php
// include_once 'footer.php';
get_footer();
?>

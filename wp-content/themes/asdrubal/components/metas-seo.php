<?php
$term = get_queried_object();

$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>

<!-- Metaetiquetas del máster -->
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="UTF-8" />

<?php $metarobots_checked_values = get_field( 'metarobots', $term );
 if ( $metarobots_checked_values ) : ?>
<meta name="robots" content="<?php the_field( 'metarobots', $term ); ?>">
<?php endif; ?>


        <?php the_field('custom_meta', $term); ?>


        <title><?php the_field( 'title', $term); ?></title>
         <meta property="og:title" content="<?php
         if (get_field('og_title', $term )){
                the_field( 'og_title', $term );
         } else{the_field( 'title', $term );}

         ?>">
         <meta property="twitter:title" content="<?php if ( get_field('twitter_title', $term)){the_field( 'twitter_title', $term );}elseif(get_field( 'og_title', $term)){the_field( 'og_title', $term );}else{the_field( 'title', $term);}?>">


<?php
         if ( in_category('coches') ) {

         $metadesc_coches = 'Mi memorable experiencia con un ' . get_field( 'marca_coche' ) . ' ' . get_field( 'modelo_coche' ) . ' de ' . get_field( 'CV') . ' CV';
         ?>
        <meta name="description" content="<?php echo $metadesc_coches ;?>">
         <meta property="og:description" content="<?php echo $metadesc_coches ;?>">
         <meta property="twitter:description" content="<?php echo $metadesc_coches ;?>">

                <?php
         }
         else{
          ?>
         <meta name="description" content="<?php the_field( 'metadescription', $term ); ?>">
         <meta property="og:description" content="<?php if ( get_field( 'og_description', $term ) ){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>">
         <meta property="twitter:description" content="<?php if ( get_field('twitter_description', $term)){the_field( 'twitter_description', $term );} elseif(get_field( 'og_description', $term)){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>">
        <?php ;} ?>

         <link rel="canonical" href="<?php if (get_field ('canonical', $term))
         {the_field('canonical',$term);}
         else {echo $url_sin_string;}
         ?>">
         <meta property="og:url" content="<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>">
         <meta property="twitter:url" content="<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>">

         <meta property="og:image" content="<?php the_field( 'og_image' ); ?>">
         <meta property="og:image:secure_url" content="<?php the_field( 'og_image' ); ?>">
         <meta property="twitter:image" content="<?php the_field( 'og_image' ); ?>">

         <meta property="og:image:alt" content="<?php the_field( 'title', $term ); ?>">


         <meta property="og:type" content="website">
         <meta property="twitter:card" content="summary_large_image">

         <meta name="twitter:site" content="@SEO_Tecnico">
         <meta name="twitter:creator" content="@SEO_Tecnico">

        <!-- <meta name="rating" content="adult"> -->



<!-- Fin de las metaetiquetas del máster -->

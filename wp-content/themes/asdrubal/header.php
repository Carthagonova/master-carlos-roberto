<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>
<?php /* 
        <link href="/css/fonts.css" rel="stylesheet">
        <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/css/estilo.css">
       include $_SERVER['DOCUMENT_ROOT'].'/assets/metaetiquetas.php';

       include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
*/ 

wp_head();
?>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/sobre-mi">Carlos</a></li>
                    <li><a href="/nuevo">New</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/carpeta/archivo-carpeta">Archivo dentro de carpeta</a></li>
                    <li><a href="/basica" target="_blank">Web básica</a></li>
                    <li><a href="http://carlos.sanchezdonate.com/" target="_blank">Más información</a></li>
                </ul>
                <div class="cerrar elemento">X</div>
            </nav>
        </header>

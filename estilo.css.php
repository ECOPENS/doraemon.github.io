<?php

header("Content-type: text/css; charset: UTF-8");


$colorFondo = "#f4f4f4";
$colorHeader = "#333";
$imagenInicio = "18.png";
$imagenContactos = "2.png";
$imagenNosotros = "14.png";
$imagenProductos = "15.png";
?>



body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: <?php echo $colorFondo; ?>;
}

header {
    background-color: <?php echo $colorHeader; ?>;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

nav {
    background-color: #444;
    overflow: hidden;
}

nav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav a:hover {
    background-color: #ddd;
    color: black;
}

section {
    padding: 20px;
    text-align: center;
    color: #fff; /* Color de texto para que sea legible en fondos oscuros */
}

#inicio {
    background-image: url('<?php echo $imagenInicio; ?>');
    background-size: cover;
}


#contactos {
    background-image: url('<?php echo $imagenContactos; ?>');
    background-size: cover;
}

#nosotros {
    background-image: url('<?php echo $imagenNosotros; ?>');
    background-size: cover;
}

#productos {
    background-image: url('<?php echo $imagenProductos; ?>');
    background-size: cover;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em 0;
}

#contactos .contacto-redes img {
    width: 30px; /* Ajusta el tamaño según tu preferencia */
    height: auto; /* Mantiene la proporción de la imagen */
    margin-right: 10px; /* Espacio entre las imágenes */
}


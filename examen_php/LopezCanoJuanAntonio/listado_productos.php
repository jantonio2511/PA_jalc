<!DOCTYPE html>
<?php 
session_start();
if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    header("location:index.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PA - Examen PHP (Diciembre, 2017)</title>
    </head>
    <body>
        <h1>Tienda de ropa</h1>
        <h2><?php $_SESSION['nombreUsuario'];?></h2>
        <form action='logout.php' method='POST'>
            <input type='submit' name='btnLogout' value='Cerrar sesi&oacute;n'/>                
        </form>
        <hr>
        <table cellpadding="10" border="1">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tallas y precios</th>
            </tr>
            <tr>  
                <td align='center'><img src='img/blusa_esmeralda.jpg' alt='Blusa Esmeralda' width='100'></td>
                <td align='center'>Blusa Esmeralda</td>
                <td align='center'>Blusa para mujer de color verde esmeralda.</td>
                <td align='center'>
                    <ul type="square">
                        <li>S: 19,50 euros</li>
                        <li>M: 19,50 euros</li>
                        <li>L: 21,50 euros</li>
                    </ul>
                </td>  
            </tr>
            <tr>  
                <td align='center'><img src='img/pantalon_gris.jpg' alt='Pantalón Gris' width='100'></td>
                <td align='center'>Pantalón Gris</td>
                <td align='center'>Pantalón gris de tela para hombre.</td>
                <td align='center'>
                    <ul type="square">
                        <li>M: 29,95 euros</li>
                        <li>L: 29,95 euros</li>
                        <li>XL: 32,95 euros</li>
                    </ul>
                </td>  
            </tr>
        </table>

    </body>
</html>
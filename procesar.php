<?php

if(isset($_POST['nombre']) &&
    isset($_POST['fecha']) &&
    isset($_POST['ocupacion']) &&
    isset($_POST['telefono'])&&
    isset($_POST['correo'])&&
    isset($_POST['sitio_web'])&&
    isset($_POST['linkedin'])&&
    isset($_POST['lugar'])&&
    isset($_POST['nivel_ingles'])&&
    isset($_POST['aptitudes'])&&
    isset($_POST['habilidades'])&&
    isset($_POST['lenguajes'])&&
    isset($_POST['perfil'])) {
        
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $ocupacion = $_POST['ocupacion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $sitio_web = $_POST['sitio_web'];
        $linkedin = $_POST['linkedin'];
        $lugar = $_POST['lugar'];
        $nivel_ingles = $_POST['nivel_ingles'];
        $aptitudes = $_POST['aptitudes'];
        $habilidades = $_POST['habilidades'];
        $lenguajes = $_POST['lenguajes'];
        $perfil = $_POST['perfil'];

        // Redirige a archivo_principal.php con los datos y habilidades como parámetros GET
        $url = 'archivo_principal.php?' . http_build_query(array(
            'nombre' => $nombre,
            'fecha' => $fecha,
            'ocupacion' => $ocupacion,
            'telefono' => $telefono,
            'correo' => $correo,
            'sitio_web' => $sitio_web,
            'linkedin' => $linkedin,
            'lugar' => $lugar,
            'nivel_ingles' => $nivel_ingles,
            'aptitudes' => $aptitudes,
            'habilidades' => $habilidades, 
            'lenguajes' => $lenguajes,
            'perfil' => $perfil  
        ));

        header("Location: $url");
        exit();
} else {
    // Si no se enviaron todos los datos, redirige de vuelta al formulario
    header("Location: form.php");
    exit();
}
?>

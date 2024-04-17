<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive CV using Html & CSS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <?php
    if(isset($_GET['nombre']) &&
    isset($_GET['fecha'])&&
    isset($_GET['ocupacion'])&&
    isset($_GET['telefono'])&&
    isset($_GET['correo'])&&
    isset($_GET['sitio_web'])&&
    isset($_GET['linkedin'])&&
    isset($_GET['lugar'])&&
    isset($_GET['nivel_ingles'])&&
    isset($_GET['aptitudes'])&&
    isset($_GET['habilidades'])&&
    isset($_GET['lenguajes'])&&
    isset($_GET['perfil'])){
        $nombre = $_GET['nombre'];
        $fecha = $_GET['fecha'];
        $ocupacion = $_GET['ocupacion'];
        $telefono = $_GET['telefono'];
        $correo = $_GET['correo'];
        $sitio_web = $_GET['sitio_web'];
        $linkedin = $_GET['linkedin'];
        $lugar = $_GET['lugar'];
        $nivel_ingles = $_GET['nivel_ingles'];
        $aptitudes = $_GET['aptitudes'];
        $habilidades = $_GET['habilidades'];
        $lenguajes = $_GET['lenguajes'];
        $perfil = $_GET['perfil'];
    }
    ?>
        <div class="top_side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="img.jpg">
                </div>
                <h2><?php echo $nombre; ?><br><span><?php echo $ocupacion; ?> / <?php echo $fecha; ?></span></h2>
            </div>
        </div>
        <div class="left_Side">
            <div class="contactInfo">
                <h3 class="title">Contacto</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $telefono; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $correo; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $sitio_web; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $linkedin; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $lugar; ?>, Perú</span>
                    </li>
                    
                </ul>
            </div>
            <div class="languages">
                <h3 class="title">Idiomas</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text">Español: Nativo</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text">Inglés: <?php echo $nivel_ingles; ?></span>
                    </li>
                </ul>
            </div>
            <div class="aptitudes">
                <h3 class="title">Aptitudes</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $aptitudes; ?></span>
                    </li>
                </ul>
            </div>
            <div class="skills">
            <h3 class="title">Habilidades</h3>
            <ul>
            <?php
                foreach($habilidades as $habilidad){
                    echo "<li>
                        <span class=\"icon\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></span>
                        <span class=\"text\">$habilidad</span>
                    </li>";
                }
            ?>
            </ul>
        </div>

            <div class="others">
                <h3 class="title">Lenguajes de programación</h3>
                <ul>
                <?php
                    foreach($lenguajes as $lenguaje){
                        echo "<li>
                            <span class=\"icon\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></span>
                            <span class=\"text\">$lenguaje</span>
                        </li>";
                    }
                ?>
                </ul>
            </div>
        </div>
        <div class="right_Side">
            <div class="profile">
                <h3 class="title_1">Perfil</h3>
                <p class="texto-justificado"><?php echo $perfil; ?></p>
            </div>
            <div class="workExperience">
                <h3 class="title_1">Experiencia laboral</h3>
                <div class="job">
                    <h3>Desarrollador de Software Junior en ABC Tech</h3>
                    <ul>
                        <li>Participé en el desarrollo y mantenimiento de aplicaciones web utilizando tecnologías como HTML, CSS, JavaScript y frameworks como AngularJS.</li>
                        <li>Colaboré en el diseño e implementación de bases de datos SQL para almacenar y gestionar datos críticos del negocio.</li>
                    </ul>
                </div>
                
                <div class="job">
                    <h3>Prácticas en Ingeniería de Software en XYZ Solutions</h3>
                    <ul>
                        <li>Contribuí al análisis de requisitos de clientes y a la elaboración de especificaciones técnicas para el desarrollo de nuevas funcionalidades.</li>
                        <li>Realicé pruebas unitarias y de integración para garantizar el correcto funcionamiento de los módulos desarrollados.</li>
                    </ul>
                </div>
                
                <div class="job">
                    <h3>Pasante en Seguridad Informática en DEF Cybersecurity</h3>
                    <ul>
                        <li>Asistí en la identificación y análisis de vulnerabilidades de seguridad en sistemas informáticos mediante herramientas de escaneo y pruebas de penetración.</li>
                    </ul>
                </div>
            </div>
            <div class="training">
                <h3 class="title_1">Formación</h3>
                <h3>Licenciatura Profesional</h3>
                <p>Universidad Católica San Pablo, Perú</p>
            </div>
        </div>
    </div>
</body>
</html>
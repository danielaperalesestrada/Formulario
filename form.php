<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre y Apellidos:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="fecha">Fecha de nacimiento:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="ocupacion">Ocupación:</label><br>
        <input type="text" id="ocupacion" name="ocupacion"><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono"><br>
        <label for="correo">Email:</label><br>
        <input type="email" id="correo" name="correo"><br>
        <label for="sitio_web">Sitio web:</label><br>
        <input type="url" id="sitio_web" name="sitio_web"><br>
        <label for="linkedin">LinkedIn:</label><br>
        <input type="url" id="linkedin" name="linkedin"><br>
        <label for="lugar">Nacionalidad:</label><br>
        <select id="lugar" name="lugar" multiple>
            <option value="Lima">Lima</option>
            <option value="Arequipa">Arequipa</option>
            <option value="Cusco">Cusco</option>
            <option value="Trujillo">Trujillo</option>
        </select><br>
        <legend>Nivel de inglés:</legend>
        <label for="basico"><input type="radio" id="basico" name="nivel_ingles" value="Basico"> Básico</label><br>
        <label for="intermedio"><input type="radio" id="intermedio" name="nivel_ingles" value="Intermedio"> Intermedio</label><br>
        <label for="avanzado"><input type="radio" id="avanzado" name="nivel_ingles" value="Avanzado"> Avanzado</label><br>
        <label for="fluido"><input type="radio" id="fluido" name="nivel_ingles" value="Fluido"> Fluido</label><br>

        <label>Aptitudes: <br><input list="aptitudes" name="aptitudes"/></label>
        <datalist id="aptitudes">
        <option value="Inteligencia emocional"></option>
        <option value="Espíritu crítico"></option>
        <option value="Trabajo en equipo"></option>
        <option value="Capacidad analítica"></option>
        <option value="Habilidades físicas"></option>
        </datalist><br>

        <legend>Habilidades:</legend>
        <input type="checkbox" name="habilidades[]" value="Inteligencia emocional">
        <label for="habilidad1">Inteligencia emocional</label><br>
        <input type="checkbox" name="habilidades[]" value="Espíritu crítico">
        <label for="habilidad2">Espíritu crítico</label><br>
        <input type="checkbox" name="habilidades[]" value="Trabajo en equipo">
        <label for="habilidad3">Trabajo en equipo</label><br>
        <input type="checkbox" name="habilidades[]" value="Capacidad analítica">
        <label for="habilidad4">Capacidad analítica</label><br>
        <input type="checkbox" name="habilidades[]" value="Habilidades físicas">
        <label for="habilidad5">Habilidades físicas</label><br>

        <label for="lenguajes">Lenguajes de programación:</label><br>
        <select id="lenguajes" name="lenguajes[]" multiple>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="JavaScript">JavaScript</option>
            <option value="C++">C++</option>
            <option value="C#">C#</option>
            <option value="Ruby">Ruby</option>
        </select><br>

        <label for="perfil">Perfil:</label><br>
        <textarea id="perfil" name="perfil" rows="4" cols="50">Profesional altamente adaptable con habilidades versátiles y experiencia interdisciplinaria en atención al cliente, investigación y gestión empresarial.</textarea>
        <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>

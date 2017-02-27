<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo 1</title>
</head>
<body>


<!-- formulario inicio -->
<form action="tarea_1.php" method="get">

    <h2>Datos personales</h2>

    <!-- Nombre -->
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"><br/><br/>

    <!-- Email -->
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br/><br/>

    <!-- Telefono -->
    <label for="telefono">Teléfono</label>
    <input type="text" id="telefono" name="telefono"><br/><br/>

    <!-- Sexo -->
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo">
        <option selected disabled>Seleccione una opción</option>
        <option value="femenino">Femenino</option>
        <option value="masculino">Masculino</option>
        <option value="otro">Otro</option>
    </select><br/><br/>

    <!-- Edad -->
    <label for="edad">Edad</label>
    <select name="edad" id="edad">
        <option selected disabled>Seleccione una opción</option>
        <option value="1"   >1  </option>
        <option value="2"   >2  </option>
        <option value="3"   >3  </option>
        <option value="4"   >4  </option>
        <option value="5"   >5  </option>
        <option value="6"   >6  </option>
        <option value="7"   >7  </option>
        <option value="8"   >8  </option>
        <option value="9"   >9  </option>
        <option value="10"  >10 </option>
        <option value="11"  >11 </option>
        <option value="12"  >12 </option>
        <option value="13"  >11 </option>
        <option value="14"  >14 </option>
        <option value="15"  >15 </option>
        <option value="16"  >16 </option>
        <option value="17"  >17 </option>
        <option value="18"  >18 </option>
        <option value="19"  >19 </option>
        <option value="19"  >19 </option>
        <option value="20"  >20 </option>
        <option value="21"  >21 </option>
        <option value="22"  >22 </option>
        <option value="23"  >23 </option>
        <option value="24"  >24 </option>
        <option value="25"  >25 </option>
        <option value="26"  >26 </option>
        <option value="27"  >27 </option>
        <option value="28"  >28 </option>
        <option value="29"  >29 </option>
        <option value="30"  >30 </option>
        <option value="30+"  >más de 30 </option>

    </select><br/><br/>

    <label for="educacion">Comente su educación</label><br/>
    <textarea name="educacion" id="educacion" cols="30" rows="10"></textarea><br/><br/>


    <label for="laboral">Comente su experiencia laboral</label><br/>
    <textarea name="laboral" id="laboral" cols="30" rows="10"></textarea><br/><br/>

    <button type="submit">Generar CV</button>

</form>
<!-- formulario fin -->
</body>
</html>
<?php
include("conexion1.php");

if (!$conectar) {
    echo "no se conecto";
} else {
    echo "si se conecto";
}

if (isset($_POST['Submit'])) { // Corregir el nombre del botón de envío
    if (isset($_POST['nombre']) && isset($_POST['gmail']) && isset($_POST['pass'])) {
        $nombre = trim($_POST['nombre']);
        $gmail = trim($_POST['gmail']);
        $pass = trim($_POST['pass']);
        $consulta = "INSERT INTO informacion (nombre, gmail, pass) VALUES ('$nombre', '$gmail', '$pass')"; // Corregir la consulta SQL
        $resultado = @mysqli_query($conectar, $consulta);
        if ($resultado) {
            echo "datos guardados";
			echo '<script type="text/javascript">
                    setTimeout(function() {
                        window.location.href = "Proyecto.html";
                    }, 1000); // Redirige después de 1 segundo
                </script>';
        } else {
            echo "no se guardaron los datos";
        }
    } else {
        echo "Faltan datos en el formulario";
    }
}
?>
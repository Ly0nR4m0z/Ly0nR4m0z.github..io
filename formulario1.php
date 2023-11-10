<!DOCTYPE html>
<html>
<head>
<title>Ejemplo get</title>
<meta charset="UTF-8">
<title>Formulario1</title>
<style>
        body {
            background-image: url('https://fortnite.gg/img/items/3444/locker.jpg?5');
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }

        .contenedor-formulario {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: red;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
<form action="guardar1.php" method="post">
<p>Nombre:<input type="text" name="nombre"></p><br>
<p>Gmail:<input type="text" name="gmail"></p><br>
<p>Contraseña:<input type="text" name="pass"></p><br>
<input name="Submit" type="submit" value="Enviar" />
</form>
</body>
</html>
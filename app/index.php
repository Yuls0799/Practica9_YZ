<!DOCTYPE html>
<html>
<head>
    <title> Práctica 9 de YZ </title>
</head>
    <body>
        <h1>Bienvenidos a la práctica 9 de YZ </h1>
           <h2> DevOps es de suma importancia para todo aquel que quisiera incursionar en el mundo TI </h2>
            <p>Creado por Yuliana Amanecer Zorrilla Castro // 2021-1823</p>

            <?php
            $host = getenv('MYSQL_HOST');
            $usern = getenv('MYSQL_USER');
            $passw = getenv('MYSQL_PASSWORD');
            $datab = getenv('MYSQL_DATABASE');

            
            $connection = new mysqli($host, $usern, $passw, $datab);

            if ($connection->connect_error) {
                die("Hubo un error al intentar conectarse:" . $connection->connect_error);
            }

            echo "Se ha conectado de manera exitosa a la base de datos, gracias por visitar :) VUELVA PRONTO!!";
            ?>

            <style>
                    body {
                        font-family: 'Consolas', monospace;
                    }

                    h1, p {
                        font-family: 'Consolas', monospace;
                        color: purple;
                    }

            </style>
    </body>
</html>

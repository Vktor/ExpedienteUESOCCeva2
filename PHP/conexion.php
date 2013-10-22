<?php

$conect = pg_connect("host=localhost dbname='expediente_ipi' user='postgres' password='1234'")
    or die('No se ha podido conectar: '. pg_last_error());


?>
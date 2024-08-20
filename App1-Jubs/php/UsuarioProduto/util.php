<?php
    function conecta ($params="")
    {
        if ($params==""){
            $params="pgsql:host=pgsql.projetoscti.com.br;
            dbname=projetoscti31; user=projetoscti31; password=kabs2024";
        }

        $varConn= new PDO($params);
        if(!$varConn){
            echo"Não conectado";
        } else{ return $varConn; }
    }
?>
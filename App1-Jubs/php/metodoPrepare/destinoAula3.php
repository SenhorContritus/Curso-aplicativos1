<?php
    if ($_POST){
        $idValor = $_POST["idValor"];
    }

    $string_conexao = 
      "mysql:host=200.145.153.196; port=3306; dbname=cursos; user=root; password=";
    $conn = new PDO($string_conexao);

    if (!$conn) 
    {
        echo "Não conectado";
        exit;
    }

    $varSQL = "SELECT * FROM cursos WHERE(valor < :valor)";

    $select = $conn->prepare($varSQL);
    $select -> bindParam(":valor", $idValor);
    $select -> execute();

    echo "<table border=1px>";
    while ( $linha = $select->fetch() ) 
    {
     echo "<tr>";
     
     echo "<td>";
     echo $linha["titulo"];
     echo "</td>";
     
     echo "<td>";
     echo $linha["descricao"];
     echo "</td>";
     
     echo "<td>";
     echo $linha["valor"];
     echo "</td>";

     echo "</tr>";       
    }
    echo "</table>" ;
?>
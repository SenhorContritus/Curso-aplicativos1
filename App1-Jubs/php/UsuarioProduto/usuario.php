<?php
    echo "<form action='' method='post'>
        Nome<br><input type='text' name='nome'><br>

        Email<br><input type='text' name='email'><br>

        Senha<br><input type='text' name='senha'><br>

        Admin<br><input type='text' name='admin'><br>

        <br><input type='submit' value='filtrar'>
    </form>";

    if ($_POST)
    {
        $string_conexao="pgsql:host=pgsql.projetoscti.com.br;
        dbname=projetoscti6; user=projetoscti08; password=eq52A268";
        $conn= new PDO($string_conexao);
        if(!$conn)
        {
            echo"nao conectado";
            exit;

        }
        else{
            echo"conectado!";
        }
        
        $varSQL = "SELECT * FROM alunos"; 
        if($valorSexo <> "")
        {
            $varSQL .="WHERE (sexo = :sexo) and (turma = :turma)";
        }
        
        $select=$conn-> prepare($varSQL);
        if($valorSexo <> "")
        {
            $select->bindParam(':sexo', $valorSexo);
            $select->bindParam(':turma', $valorTurma);
        }
        
        $select -> execute();

        echo"<table border=1>";
        while($linha = $select ->fetch() )
        {
            echo "<tr>";
            echo "<td>";
            echo $linha["nome"];
            echo "</td>";

            echo "<td>";
            echo $linha["sexo"];
            echo "</td>";

            echo "<td>";
            echo $linha["turma"];
            echo "</td>";

            echo "<td>";
            echo $linha["matricula"];
            echo "</td>";

            echo "<td>";
            echo "<a href= 'alterarAlunos.php?id=".$linha['id']."'>Alterar</a>";
            echo "</td>";

            echo "<td>";
            echo "<a href= 'excluirAlunos.php?id=".$linha['id']."'>Excluir</a>";
            echo "</td>";

            echo"</tr>";
        }
        echo"</table>";

        echo "<a href='./adicionarAlunosCompleto.php'>Adicionar</a>";
    }
?>
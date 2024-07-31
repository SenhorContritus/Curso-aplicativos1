<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["Nome"];
        $num = $_POST["Num"];
        $Materia = $_POST["Materias"];
        $ntProva = $_POST["ntProva"];
        $ntCredi = $_POST["ntCredi"];
        $att = isset($_POST["att"]) ? $_POST["att"] : "Não especificado";
    }

    echo"
        <h1>DADOS SALVOS</h1><br><br>
        <table border='2px'>
            <tr>
                <td>Nome do aluno</td>
                <td>$nome</td>
            </tr>
            <tr>
                <td>Número do aluno</td>
                <td>$num</td>
            </tr>
            <tr>
                <td>Disciplina</td>
                <td>$Materia</td>
            </tr>
            <tr>
                <td>Nota da Prova</td>
                <td>$ntProva</td>
            </tr>
            <tr>
                <td>Nota de crediária</td>
                <td>$ntCredi</td>
            </tr>
            <tr>
                <td>Atividades</td>
                <td>$att</td>
            </tr>
        </table>
    "
?>
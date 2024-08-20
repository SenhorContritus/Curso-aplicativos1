<?php
include ("util.php");
echo"
        <form method='POST' name='att2' action=''>
            <h2><lable for=''>Inclusão de cadastro:</label></h2><br>
            
            <lable for='input'>ID:</label>
            <input type='num' name='idAluno'><br><br>

            <lable for='input'>Nome:</label>
            <input type='text' name='nomeAluno'><br><br>

            <lable for='select'>Sexo:</label>
            <select name='sexoAluno' id='sexoAluno'>
                <option value='M'>Masculino</option>
                <option value='F'>Feminino</option>
            </select><br><br>

            <lable for='input'>Matrícula:</label>
            <input type='num' name='matriculaAluno'><br><br>

            <lable for='input'>Celular:</label>
            <input type='tel' name='celularAluno'><br><br>

            <lable for='input'>Email:</label>
            <input type='email' name='emailAluno'><br><br>


            <lable for='select'>Turma:</label>
            <select name='turmaAluno' id='turmaAluno'>
                <option value='INI2A'>INI 2A</option>
                <option value='INI2A'>INI 2B</option>
                <option value='INI2'>INI 2</option>
            </select><br><br>

            <button type='submit' value='Adicionar'>Enviar</button>
        </form>
    ";

    if($_POST){
        $conn = conecta();
        $varSQL = " INSERT INTO alunos (id, nome, sexo, matricula, celular, email, turma)
                    VALUES (:idAluno, :nomeAluno, :sexoAluno, :matriculaAluno, :celularAluno, :emailAluno, :turmaAluno)";

        $insert = $conn->prepare($varSQL);
        $insert->bindParam(':idAluno', $_POST["idAluno"]);
        $insert->bindParam(':nomeAluno', $_POST["nomeAluno"]);
        $insert->bindParam(':sexoAluno', $_POST["sexoAluno"]);
        $insert->bindParam(':matriculaAluno', $_POST["matriculaAluno"]);
        $insert->bindParam(':celularAluno', $_POST["celularAluno"]);
        $insert->bindParam(':emailAluno', $_POST["emailAluno"]);
        $insert->bindParam(':turmaAluno', $_POST["turmaAluno"]);
        $insert->execute();

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Revisão Foreach</h1>

    <p>Parte 1: exibir os dados do vetor abaixo
         como uma tabela HTML</p>


    <?php
        $aluno[0]["nome"] = "João";
        $aluno[0]["nota1"] = 5.0;
        $aluno[0]["nota2"] = 6.0;
        $aluno[0]["sexo"] = "M";
        $aluno[0]["frequencia"] = 0.80;
        


        $aluno[1]["nome"] = "Maria";
        $aluno[1]["nota1"] = 7.0;
        $aluno[1]["nota2"] = 8.5;
        $aluno[1]["sexo"] = "F";
        $aluno[1]["frequencia"] = 0.9;
        


        $aluno[2]["nome"] = "Rita";
        $aluno[2]["nota1"] = 6.0;
        $aluno[2]["nota2"] = 7.0;
        $aluno[2]["sexo"] = "F";
        $aluno[2]["frequencia"] = 0.60;
        

        $aluno[3]["nome"] = "Manuel";
        $aluno[3]["nota1"] = 8.0;
        $aluno[3]["nota2"] = 6.0;
        $aluno[3]["sexo"] = "M";
        $aluno[3]["frequencia"] = 1.00;

        for($i = 0; $i <= 3; $i++){
            $aluno[$i]["media"] = ($aluno[$i]["nota1"] + $aluno[$i]["nota2"])/2;
            if( $aluno[$i]["media"] >= 6){
                $aluno[$i]["situacao"] = "Aprovado";
            } else{
                $aluno[$i]["situacao"] = "Reprovado";
            }
        }
        
        echo '<table border ="1">';
        echo "<tr>";
        echo "<td>Nome</td>";
        echo "<td>Nota1</td>";
        echo "<td>Nota2</td>";
        echo "<td>Sexo</td>";
        echo "<td>freq</td>";
        echo "<td>media</td>";
        echo "<td>situação</td>";
        echo "</tr>";
        

        foreach($aluno as $v){
            echo "<tr>";
            foreach($v as $a){
                echo "<td>$a</td>";
                 
            }
            echo "</tr>";
        }
        echo "</table>";



    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA SENA DO GIULI</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Dezenas sorteadas</th> 
            </tr>
        </thead>    
        <?php
        require __DIR__ . '/model/Concurso.php';
        $concurso = new Concurso();
        $sorteio = $concurso->realizaConcurso();

        foreach ($sorteio  as $dezenaSorteada) {
            echo '<tr>';
            echo    '<td>' . $dezenaSorteada . '</td>';
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>
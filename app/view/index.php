<?php
        require_once __DIR__ . 'app/model/Concurso.php';
        require_once __DIR__ . 'app/model/Sorteio.php';
        $concurso = new Concurso();
        $sorteio = $concurso->realizaConcurso();

        echo '<table>
        <thead>
            <tr>
                <th>Dezenas sorteadas</th> 
            </tr>
        </thead>'; 
        foreach ($sorteio  as $dezenaSorteada) {
            echo '<tr>';
            echo    '<td>' . $dezenaSorteada . '</td>';
            echo '</tr>';
        }
        echo '</table>';
?>
       

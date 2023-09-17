<?php
function imprimirDatas($dataInicial, $dataFinal) {

    $dataInicio = new DateTime($dataInicial);
    $dataFim = new DateTime($dataFinal);

   
    while ($dataInicio <= $dataFim) {
        echo $dataInicio->format('d/m/Y') . "\n";
        $dataInicio->add(new DateInterval('P1D'));
    }
}

imprimirDatas('2023-09-10', '2023-09-15');
?>
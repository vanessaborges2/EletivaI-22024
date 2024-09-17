<?php

    $frutas = array("morango", "maçã", "abacaxi");

    echo "<p>".$frutas[0]."</p>";

    $frutas[0] = "laranja";

    $frutas["fruta"] = 15;

    $cores[0] = "azul";
    $cores["cor"] = "laranja";

    $mapa = [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3
    ];

    var_dump($cores);
    echo "<p></p>";
    print_r($mapa);

    asort($frutas);
    #ksort($frutas);

    #foreach($frutas as $valor)
    foreach($frutas as $chave => $valor){
        echo "<p>Na posição $chave temos a fruta: $valor</p>";
    }

    echo "Quantidade de elementos:".count($frutas);
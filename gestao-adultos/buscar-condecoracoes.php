<?php
        $url = "http://localhost:8080/solicitacoes/solicitacao-condecoracao";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        var_dump($resultado);

        foreach ($resultado->results as $solicitacao) {
            //var_dump($ator);
            echo "identificador: " . $solicitacao->identificador . "<br>";
            echo "identificadorSolicitacao: " . $ator->identificadorSolicitacao . "<br>";  
            echo "<hr>";
        }
?>
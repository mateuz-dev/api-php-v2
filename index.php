<?php

    include('./connection.php');
    include('./model/ModelPessoa.php');


    $conn = new Connection();

    // echo '<pre>';
    // var_dump($conn->returnConnection());
    // echo '</pre>';
    

    $modelPessoa = new ModelPessoa($conn->returnConnection());

    $dados = $modelPessoa->findAll();

    echo '<pre>';
    var_dump($dados);
    echo '</pre>';

?>
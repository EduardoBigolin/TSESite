    <?php
    $recebido = $_COOKIE['cadastro'];
    // Recebe os dados do cookie em formato de Array associativo
    $carrinhoAtual = unserialize($recebido);
    if (!$recebido) {
        header('location: ./cadastro.php');
        exit;
    }
    // Pegas os dados do Voto
    $voto = $_POST["id"];

    echo "Cadastro: ";
    print_r($carrinhoAtual); 
    echo "<br/>";
    echo "Voto do cadastro: " . $voto;
    ?>
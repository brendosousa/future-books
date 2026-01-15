<?php
include "info.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $obra_escolhida = $_POST['operation'];
    $result = "Sinopse não encontrada.";
    $pos = null;

    switch ($obra_escolhida) {
        case "1":
            $result = $sinopose_chico_barauna;
            $pos = 0;
            break;
        case "2":
            $result = $sinopse_fazenda_treze;
            $pos = 1;
            break;
        case "3":
            $result = $sinopse_marra_vs_leone;
            $pos = 2;
            break;
        case "4":
            $result = $sinopse_ceifador;
            $pos = 3;
            break;
        case "5":
            $result = $sinopse_homem_que_vendeu_o_mundo;
            $pos = 4;
            break;
        case "6":
            $result = $sinopse_especialistas;
            $pos = 5;
            break;
        case "7":
            $result = $sinpose_por_que_as_coisas_caem;
            $pos = 6;
            break;                    
        case "8":
            $result = $sinopose_vine;
            $pos = 7;
            break; 
        default:
            $result = "Escolha inválida.";
            break;
    }

    if ($pos !== null && isset($titulos[$pos])) {
        $titulo = $titulos[$pos];
    } else {
        $titulo = "Título não encontrado.";
    }

    echo "<div>
            <link rel='stylesheet' href='style.css'>
            <h2>$titulo</h2>
            <div>
                $result    
            </div>
            <button>
                <a href='index.html'>Voltar</a>
            </button>
         </div>";
} else {
    echo "Acesso inválido.";
}
?>

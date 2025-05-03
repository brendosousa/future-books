<?php
 include "info.php";

if (isset($_POST['submit'])) {
    $obra_escolhida = $_POST['operation'];
    switch ($obra_escolhida) {
        case "1":
            $result = $sinopse_morte_e_vida_de_osmar_fragoso;
            $pos = 0;
            break;;
        case "2":
            $result = $sinopose_chico_barauna;
            $pos = 1;
            break;
        case "3":
            $result = $sinopse_fazenda_treze;
            $pos = 2;
            break;
        case "4":
            $result = $sinopse_marra_vs_leone;
            $pos = 3;
            break;
        case "5":
            $result = $sinopse_ceifador;
            $pos = 4;
            break;
        case "6":
            $result = $sinopse_homem_que_vendeu_o_mundo;
            $pos = 5;
            break;
        case "7":
            $result = $sinopse_especialistas;
            $pos = 6;
            break;
        case "8":
            $result = $sinpose_por_que_as_coisas_caem;
            $pos = 7;
            break;                    
        case "9":
            $result = $sinopose_vine;
            $pos = 8;
            break; 
        default:
            $result = "Escolha inválida.";
            break;
    }
    echo "<div>
            <link rel='stylesheet' href='style.css'>
            <h2>$titulos[$pos]</h2>
            <div>
                $result    
            </div>
            <button>
                <a href='index.html'>Voltar</a>
            </button>
         </div>";
    
}


?>
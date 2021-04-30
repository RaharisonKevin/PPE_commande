<?php

    $prix_tablette = 600;
    $prix_pc = 800;
    $prix_portable = 900;
    $tva = 20;

    $result_prix_tablettes = $_SESSION["tablettes"] * $prix_tablette;
    $result_prix_pc = $_SESSION["pc"] * $prix_pc;
    $result_portable = $_SESSION["portable"] * $prix_portable; 

    $prix_total_ht = $result_prix_tablettes + $result_prix_pc + $result_portable;
    $prix_tva = $prix_total_ht * $tva / 100;
    $prix_total_ttc = $prix_tva + $prix_total_ht;
?>
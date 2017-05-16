<?php

namespace Controller;

use Helper\Database;

/**
 * Class FrontController
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Controller
 */
class FrontController
{

    /**
     * FrontController constructor.
     */
    public function __construct()
    {
        // je me connecte
        $db = Database::get();
        // gestion de l'action appelée, GEST en prio, puis POST puis chaine vide
        $a = $_GET['a'] ?? $_POST['a'] ?? '';
        switch($a){
            case "details":
                // GET /?a=details&id={id}
                $controller = new PokemonController();
                echo $controller->detailsAction();
                break;

            case "admin/supprimemoi":
                // GET /?a=details&id={id}
                $controller = new PokemonController();
                echo $controller->supprimeMoiAction();
                break;

            case "list":
            default:
                // GET / ou GET /?a=list
                $controller = new PokemonController();
                echo $controller->listAction();
                break;
        }
    }
}
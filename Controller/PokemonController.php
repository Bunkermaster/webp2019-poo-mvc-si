<?php

namespace Controller;

use Helper\Controller;
use Model\PokemonModel;

/**
 * Class PokemonController
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Controller
 */
class PokemonController extends Controller
{
    public function listAction()
    {
        $model = new PokemonModel();
        $data = $model->get();
        return self::$twig->render('Pokemon/list.html.twig',[
            'list' => $data
        ]);
    }

    public function addAction()
    {
        if(count($_POST) > 0){
            // je gere le formulaire soumit
        } else {
            // j'affiche le formulaire
        }
    }

    public function updateAction()
    {

    }

    public function detailsAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('Pas d\'id');
        }
        $model = new PokemonModel();
        $data = $model->get($_GET['id']);
        return self::$twig->render('Pokemon/details.html.twig',[
            'list' => $data[0]
        ]);
    }

    public function deleteAction()
    {

    }

    public function supprimeMoiAction()
    {
        return self::$twig->render('Pokemon/delete.html.twig',[]);
    }
}
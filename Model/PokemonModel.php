<?php

namespace Model;

use Helper\Model;

/**
 * Class PokemonModel
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Model
 */
class PokemonModel extends Model
{
    public function get($id = null)
    {
        $sql = "SELECT `id`, `nom`, `type` FROM `pokemon`";
        if(!is_null($id)){
            $sql .= " WHERE `id` = :id";
        }
        $stmt = self::$db->prepare($sql);
        if(!is_null($id)){
            $stmt->bindValue(':id', $id);
        }
        $stmt->execute();
        if($stmt->errorCode() !== '00000'){
            throw new \Exception('Argh database');
        }
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
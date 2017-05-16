<?php

namespace Helper;

/**
 * Class Model
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Helper
 */
class Model
{
    protected static $db = null;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        self::$db = Database::get();
    }
}

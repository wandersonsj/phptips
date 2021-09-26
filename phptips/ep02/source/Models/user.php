<?php
    namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class user extends DataLayer {
        public function __construct()
        {
            //parent::__construct(entity:"usuarios",[]);
            parent::__construct("usuarios",["nome","senha","perfil"]);
        }

    }

?>
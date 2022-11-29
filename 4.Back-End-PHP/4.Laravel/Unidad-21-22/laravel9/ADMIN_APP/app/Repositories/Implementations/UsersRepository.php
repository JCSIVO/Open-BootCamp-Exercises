<?php

    namespace App\Repositories\Implementations;

    use App\Models\User;

    class UsersRepository{

        protected $_model;

        public function __construct(User $model)
        {
            $this->_model = $model;
        }

        public function helloWorld(){
            echo "Hola Mundo desde Users";
        }
    }

?>
<?php

    namespace App\Repositories\Implementations;

    class HomeRepository{
        
        protected $_usersRepository;

        public function __construct(UsersRepository $usersRepository)
        {
            $this->_usersRepository = $usersRepository;
        }

        public function getUsersRepository()
        {
            return $this->_usersRepository;
        }

        public function helloWorld(){
            echo "Hola Mundo";
        }
    }

?>
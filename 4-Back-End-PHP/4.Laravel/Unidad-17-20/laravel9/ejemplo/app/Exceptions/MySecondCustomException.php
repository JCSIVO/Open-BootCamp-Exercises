<?php

namespace App\Exceptions;

use Exception;

class MySecondCustomException extends Exception
{
    // protected $_message;
    protected $_data;

    public function __construct($message, $data) 
    {
        parent::__construct($message);
        $this->_message = $message;
        $this->_data = $data;
    }
    public function getData(){
        return $this->_data;
    }
}

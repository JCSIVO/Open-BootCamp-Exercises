<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class MessageGenerator{
    private $logger;

    public function __construct (LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function getHAppyMessage(): bool
    {
        $this->logger->warning("About to find a happy message");
        // return
        return true;
    }
}
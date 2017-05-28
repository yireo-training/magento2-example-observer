<?php
namespace Yireo\ExampleObserver\Manager;

use Psr\Log\LoggerInterface;

class Logger
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($message)
    {
        $this->logger->notice($message);
    }
}

<?php
/**
 *
 */

namespace Yireo\ExampleObserver\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Yireo\ExampleObserver\Manager\Logger;

/**
 * Class LogControllerAction
 * @package Yireo\ExampleObserver\Observer
 */
class LogControllerAction implements ObserverInterface
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * LogControllerAction constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Framework\App\RequestInterface $request */
        $request = $observer->getEvent()->getRequest();
        $this->logger->log($request->getModuleName().' = '.$request->getActionName());
    }
}

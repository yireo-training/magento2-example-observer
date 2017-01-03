<?php
namespace Yireo\TestObserver\Observer;

use Magento\Framework\Event\Observer;

class LogControllerAction
{
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    public function execute(Observer $observer)
    {
        $controllerAction = $observer->getEvent()->getControllerAction();
        $request = $observer->getEvent()->getRequest();
        $this->helper->log($request.'='.$controllerAction);
    }
}
